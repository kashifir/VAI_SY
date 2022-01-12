<?php

namespace App\Controller;

use App\Entity\Mainset;
use ContainerRabcco4\getEntityManagerService;
use Doctrine\Persistence\ManagerRegistry;
use PhpOffice\PhpSpreadsheet\Exception;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;


class ApiController extends AbstractController
{
    /**
     * @Route ("/api/v1/test",name="api_v1_test",methods={"POST"})
     * @param ManagerRegistry $doctrine
     * @param Request $request
     * @return JsonResponse
     *
     * @throws Exception
     */
    final public function getFileTest(ManagerRegistry $doctrine, Request $request): JsonResponse
    {
        $data = $this->xslx($request);
        $reponse = [];
        foreach ($data as $val) {
            $objdata[] = [
                'Noms' => $val['B'],
                'Unit_de_mesure' => $val['C'],
                'data' => $val['D']
            ];
        }
        $sexe = "";
        $age = 0;
        $postion = "";
        foreach ($objdata as $x => $val) {
            if ($val['Noms'] === "man or woman" || $val['Noms'] === "Man or Woman" || $val['Noms'] === "Age" || $val['Noms'] === "age" || $val['Noms'] === 'Position/Sport' || $val['Noms'] === 'position/sport') {
                if ($val['Noms'] === "man or woman" || $val['Noms'] === "Man or Woman") {
                    $sexe = $val['data'];
                    continue;
                }
                if ($val['Noms'] === "Age" || $val['Noms'] === "age") {
                    $age = $val['data'];
                    continue;
                }
                if ($val['Noms'] === "position/sport" || $val['Noms'] === "Position/Sport") {
                    $postion = $val['data'];
                    continue;
                }
            } elseif ($val['data'] === null) {
                continue;
            } else {
                if ($val['Unit_de_mesure'] === null) {
                    $Unit_de_mesure = ' ';
                } else {
                    $Unit_de_mesure = $val['Unit_de_mesure'];
                }

                $data = $val['data'];
                $nom = $val['Noms'];

                $test = $doctrine->getRepository(Mainset::class)->getTestBy(
                    $nom,
                    $Unit_de_mesure,
                    $sexe,
                    $age
                );
                $reponse[] = $this->getresTest($test[0], $data, $postion, $reponse);
            }
        }

        return new JsonResponse($reponse);
    }

    /**
     * @Route("/upload-excel", name="xlsx")
     * @param Request $request
     * @return array | \Exception|FileException
     * @throws Exception
     */
    final  public function xslx(Request $request): array|\Exception|FileException
    {
        $file = $request->files->get('file'); // get the file from the sent request
        $fileFolder = __DIR__ . '/../../public/uploads/';  //choose the folder in which the uploaded file will be stored
        $filePathName = $file->getClientOriginalName();
        // apply md5 function to generate an unique identifier for the file and concat it with the file extension
        try {
            $file->move($fileFolder, $filePathName);
        } catch (FileException $e) {
            return $e;
        }
        $spreadsheet = IOFactory::load($fileFolder . $filePathName); // Here we are able to read from the excel file
        $row = $spreadsheet->getActiveSheet()->removeRow(1); // I added this to be able to remove the first file line
        // here, the read data is turned into an array
        return $spreadsheet->getActiveSheet()->toArray(null, true, true, true);
    }

    /**
     *
     * @param Mainset $test
     * @param string $data
     * @param string|null $postion
     * @param array|null $reponse
     * @return array
     */
    final public function getresTest(Mainset $test, string $data, ?string $postion, ?array $reponse): array
    {
        $repose = [];
        // condition for Barre 1
        switch ($test->getCondition1()) {
            case "":
            case ' ':
                $repose = $this->getArr($test, $data);
                break;
            case "< ou >":
                if ($data < $test->getThresholdMin() || $data > $test->getThresholdMax()) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case "O+ ou O-" :
                if (strtolower($data) === "o+" || strtolower($data) === "o-") {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>' :
                if (floatval($data) > floatval($test->getThresholdMin()) && floatval($data) > floatval(
                        $test->getThresholdMax()
                    )) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '<':
                if ($data < $test->getThresholdMin() && $data < $test->getThresholdMax()) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case 'Blessé':
                if ($data == 'Blessé') {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case 'Yes':
            case 'yes':
                if ($data == 'no' || $data == "No" || $data == "Non" || $data == "non") {
                    $repose = $this->getFalArr($test, $data);
                } elseif ($data >= 50) {
                    $repose = $this->getArr($test, $data);
                } elseif ($data >= 25) {
                    $repose = $this->getArr($test, $data);
                } elseif ($data >= 10) {
                    $repose = $this->getArr($test, $data);
                } elseif ($data == 1) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getArr($test, $data);
                }
                break;
            case 'Compte Nb Yes>=10':
                if ($data >= 10) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '> 8 -10 <=':
                if ($data > 8 && $data <= 10) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '> 13':
                if ($data > 13) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '> 19':
                if ($data > 19) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '> 21':
                if ($data > 21) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '> 28':
                if ($data > 28) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>= 5 - 6<':
                if ($data >= 5 && $data < 6) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>=140 -200<=':
                if ($data >= 140 && $data <= 200) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>= 50 - 100 <':
                if ($data >= 50 && $data < 100) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                $repose['bar3']['point'] = $test->getPoints1DeBarre3();
                break;
            case '>= 20 - 30':
                if ($data >= 20 || $data > 30) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>= 1:40 - 1:160<':
                if (floatval($data) >= floatval('1:40') || floatval($data) > floatval('1:160')) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '< 3,5':
                if (floatval($data) < floatval("3.5")) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '< 35':
                if ($data < 35) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>=7,8 -11,1<=':
                if (floatval($data) >= floatval("7.8") || floatval($data) < floatval("11,1")) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case 'Positivo / Yes':
            case 'No/Yes':
                if ($data == "Yes" || $data == "yes" || $data == "Positivo" || $data == "Positivo / Yes") {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>12':
                if ($data > 12) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '1 - 3<':
                if ($data < 3 || $data < 1) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '> 30%':
                if ($data > 30) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>14':
                if ($data > 14) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>= 5 - 20<':
                if ($data >= 5 && $data < 20) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>= 5 - 10<':
                if ($data >= 5 && $data < 10) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>= 7 - 10<':
                if ($data >= 7 && $data < 10) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>=7,8 -11,1<=':
                if ($data >= 7.8 && $data <= 11.1) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>= 1800 - 1999 <=':
                if ($data >= 1800 && $data < 1999) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '< 250':
                if ($data < 250) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>=2,5 - 25<':
                if (floatval($data) >= floatval('2,5') && floatval($data) < 25) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>=3,5 - 35<':
                if (floatval($data) >= floatval('3,5') && floatval($data) < 35) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case 'Compte Nb Yes>=50':
                if ($data >= 50) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case 'Compte Nb Yes>=25':
                if ($data >= 25) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '1':
                if ($data == 1) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '+':
                if ($data == '+') {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case 'Yes + Grade 1':
                if (strtolower($data) == 'yes + Grade 1' || $data == 'Yes' || strtolower($data) == "grade 1") {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>= 21° - 40° <=':
                if ($data >= 20 && $data < 40) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '>= 60° - 61° <=':
                if ($data >= 60 && $data < 61) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '< 41°':
                if ($data < 41) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '< 45°':
                if ($data < 45) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '< 25°':
                if ($data < 25) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case 'III°':
                if ($data == "III") {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '> =':
            case '>=':
                if ($data >= $test->getThresholdMax()) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
            case '=<':
                if ($data <= $test->getThresholdMax()) {
                    $repose = $this->getArr($test, $data);
                } else {
                    $repose = $this->getFalArr($test, $data);
                }
                break;
        }
        switch ($test->getCondition2DeBarre()) {
            case "":
                break;
            case '>10':
                if ($data > 10) {
                    $repose['bar1']['point'] = $test->getPoints2DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition2DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '<':
                if ($data < $test->getThresholdMin()) {
                    $repose['bar1']['condition'] = $test->getCondition2DeBarre();
                    $repose['bar1']['point'] = $test->getPoints2DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '>=6-6,4':
                if ($data >= 6 && $data < 6.4) {
                    $repose['bar1']['point'] = $test->getPoints2DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition2DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '++':
                if ($data == "++") {
                    $repose['bar1']['point'] = $test->getPoints2DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition2DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case 'Compte : 2':
                if ($data == 2) {
                    $repose['bar1']['point'] = $test->getPoints2DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition2DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case 'Si "git Varus or valgus malalignment" = Yes':
                if ($data == "Yes" || $data == 'yes') {
                    foreach ($objdata as $x => $val) {
                        if ($val['Noms'] === 'Varus or valgus malalignment') {
                            if ($val['data'] == "Yes" || $val['data'] == "yes") {
                                $repose['bar1']['point'] = $test->getPoints2DeBarre();
                                $repose['bar1']['condition'] = $test->getCondition2DeBarre();
                                $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                            }
                        }
                    }
                }
                break;
            case 'Yes + Grade 2':
                if ($data == "Yes" || $data == 'Yes + Grade 2' || $data == 'yes + grade 2' || $data == 'Grade 2' || $data == 'grade 2') {
                    $repose['bar1']['point'] = $test->getPoints2DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition2DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '>40°':
                if ($data > 40) {
                    $repose['bar1']['point'] = $test->getPoints2DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition2DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '>=61° - 71° <=':
                if ($data >= 61 && $data <= 71) {
                    $repose['bar1']['point'] = $test->getPoints2DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition2DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case 'IV°':
                if ($data == 'IV') {
                    $repose['bar1']['point'] = $test->getPoints2DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition2DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
        }
        switch ($test->getCondition3DeBarre()) {
            case "":
                break;
            case '>10':
                if ($data > 10) {
                    $repose['bar1']['point'] = $test->getPoints3DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition3DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '>71°':
                if ($data > 71) {
                    $repose['bar1']['point'] = $test->getPoints3DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition3DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '>=6,5':
                if ($data >= 6.5) {
                    $repose['bar1']['point'] = $test->getPoints3DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition3DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '+++':
                if ($data == "+++") {
                    $repose['bar1']['point'] = $test->getPoints3DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition3DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case 'Compte : 3':
                if ($data == 3) {
                    $repose['bar1']['point'] = $test->getPoints3DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition3DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case 'Compte >= 3':
                if ($data >= 3) {
                    $repose['bar1']['point'] = $test->getPoints3DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition3DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case 'Yes + Grade 3':
                if ($data == "Yes" || $data == 'Yes + Grade 3' || $data == 'yes + grade 3' || $data == 'Grade 3' || $data == 'grade 3') {
                    $repose['bar1']['point'] = $test->getPoints3DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition3DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
        }
        switch ($test->getCondition4DeBarre()) {
            case "":
                break;
            case '>10':
                if ($data > 10) {
                    $repose['bar1']['point'] = $test->getPoints4DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition4DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '>71°':
                if ($data > 71) {
                    $repose['bar1']['point'] = $test->getPoints4DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition4DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '>=6,5':
                if (floatval($data) >= floatval('6,5')) {
                    $repose['bar1']['point'] = $test->getPoints4DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition4DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '+++':
                if ($data == "+++") {
                    $repose['bar1']['point'] = $test->getPoints4DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition4DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case 'Compte : 4':
                if ($data == 4) {
                    $repose['bar1']['point'] = $test->getPoints4DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition4DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case 'Compte >= 3':
                if ($data >= 3) {
                    $repose['bar1']['point'] = $test->getPoints4DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition4DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case 'Yes + Grade 3':
                if ($data == "Yes" || $data == 'Yes + Grade 4' || $data == 'yes + grade 4' || $data == 'Grade 4' || $data == 'grade 4') {
                    $repose['bar1']['point'] = $test->getPoints4DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition4DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
        }
        switch ($test->getCondition5DeBarre()) {
            case "":
                break;
            case '>10':
                if ($data > 10) {
                    $repose['bar1']['point'] = $test->getPoints5DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition5DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '>71°':
                if ($data > 71) {
                    $repose['bar1']['point'] = $test->getPoints5DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition5DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '>=6,5':
                if (floatval($data) >= floatval('6,5')) {
                    $repose['bar1']['point'] = $test->getPoints5DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition5DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '+++':
                if ($data == "+++") {
                    $repose['bar1']['point'] = $test->getPoints5DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition4DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case 'Compte : 5':
                if ($data == 5) {
                    $repose['bar1']['point'] = $test->getPoints5DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition5DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case 'Compte >= 3':
                if ($data >= 3) {
                    $repose['bar1']['point'] = $test->getPoints5DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition5DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case 'Yes + Grade 3':
                if ($data == "Yes" || $data == 'Yes + Grade 4' || $data == 'yes + grade 4' || $data == 'Grade 4' || $data == 'grade 4') {
                    $repose['bar1']['point'] = $test->getPoints5DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition5DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
        }
        switch ($test->getCondition6DeBarre()) {
            case "":
                break;
            case 'Compte >= 6':
                if ($data >= 6) {
                    $repose['bar1']['point'] = $test->getPoints6DeBarre();
                    $repose['bar1']['condition'] = $test->getCondition6DeBarre();
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                    $repose['Marker1']['point'] = $test->getPoints1DeMarkersSpecifiques1();
                }
                break;
        }
        // end
        switch ($test->getCondition2DeBarre2()) {
            case "":
                break;
            case '>=6-6,4':
                if ($data >= 6 && $data <= 6.4) {
                    $repose['bar2']['condition'] = $test->getCondition2DeBarre2();
                    $repose['bar2']['point'] = $test->getPoints2DeBarre2();
                }
                break;
            case '> 11,1':
                if ($data > 11.1) {
                    $repose['bar2']['condition'] = $test->getCondition2DeBarre2();
                    $repose['bar2']['point'] = $test->getPoints2DeBarre2();
                }
                break;
            case '> 3':
                if ($data > 3) {
                    $repose['bar2']['condition'] = $test->getCondition2DeBarre2();
                    $repose['bar2']['point'] = $test->getPoints2DeBarre2();
                }
                break;
            case '>= 1:160':
                if (floatval($data) >= floatval('1:160')) {
                    $repose['bar2']['condition'] = $test->getCondition2DeBarre2();
                    $repose['bar2']['point'] = $test->getPoints2DeBarre2();
                }
                break;
            case '<':
                if ($data < $test->getThresholdMin()) {
                    $repose['bar2']['condition'] = $test->getCondition2DeBarre2();
                    $repose['bar2']['point'] = $test->getPoints2DeBarre2();
                } else {
                    $repose['bar2']['condition'] = "";
                    $repose['bar2']['point'] = $test->getPoints1DeBarre2();
                }
                break;
            case '>10':
                if ($data > 10) {
                    $repose['bar2']['condition'] = $test->getCondition2DeBarre2();
                    $repose['bar2']['point'] = $test->getPoints2DeBarre2();
                }
                break;
            case '> 200':
                if ($data > 200) {
                    $repose['bar2']['condition'] = $test->getCondition2DeBarre2();
                    $repose['bar2']['point'] = $test->getPoints2DeBarre2();
                }
                break;
            case 'Si clinic + imaging ou injection = Yes':
                if (strtolower($data) == 'yes') {
                    $repose['bar2']['condition'] = $test->getCondition2DeBarre2();
                    $repose['bar2']['point'] = $test->getPoints2DeBarre2();
                }
                break;
            case 'Yes + Grade 2':
                if ($data == "Yes" || $data == 'Yes + Grade 2' || $data == 'yes + grade 2' || $data == 'Grade 2' || $data == 'grade 2') {
                    $repose['bar2']['condition'] = $test->getCondition2DeBarre2();
                    $repose['bar2']['point'] = $test->getPoints2DeBarre2();
                }
                break;
        }
        switch ($test->getCondition3DeBarre2()) {
            case "":
                break;
            case '>=6,5':
                if ($data >= 6.5) {
                    $repose['bar2']['condition'] = $test->getCondition3DeBarre2();
                    $repose['bar2']['point'] = $test->getPoints3DeBarre2();
                }
                break;
            case 'Si clinic + imaging + (Acide ialuronique ou PRP ou Stem cells ou cortisone) = Yes':
                if (strtolower($data) == 'yes') {
                    $repose['bar2']['condition'] = $test->getCondition3DeBarre2();
                    $repose['bar2']['point'] = $test->getPoints3DeBarre2();
                }
                break;
            case 'Yes + Grade 2':
                if ($data == "Yes" || $data == 'Yes + Grade 2' || $data == 'yes + grade 2' || $data == 'Grade 2' || $data == 'grade 2') {
                    $repose['bar2']['condition'] = $test->getCondition3DeBarre2();
                    $repose['bar2']['point'] = $test->getPoints3DeBarre2();
                }
                break;
        }

        switch ($test->getCondition1bisDeBarre3()) {
            case '>':
                if ($data > $test->getThresholdMax()) {
                    $repose['bar3']['condition'] = $test->getCondition1bisDeBarre3();
                    $repose['bar3']['point'] = $test->getPoints1DeBarre3();
                }
                break;
            case '<':
                if ($data < $test->getThresholdMin()) {
                    $repose['bar3']['condition'] = $test->getCondition1bisDeBarre3();
                    $repose['bar3']['point'] = $test->getPoints1DeBarre3();
                } else {
                    $repose['bar3']['condition'] = $test->getCondition1bisDeBarre3();
                    $repose['bar3']['point'] = 0;
                }
                break;
        }

        switch ($test->getCondition2DeBarre3()) {
            case '>=100 - 150 <':
                if ($data >= 100 && $data < 150) {
                    $repose['bar3']['condition'] = $test->getCondition2DeBarre3();
                    $repose['bar3']['point'] = $test->getPoints2DeBarre3();
                }
                break;
            case '>= 30':
                if ($data >= 30) {
                    $repose['bar3']['condition'] = $test->getCondition2DeBarre3();
                    $repose['bar3']['point'] = $test->getPoints2DeBarre3();
                }
                break;
        }
        switch ($test->getCondition3DeBarre3()) {
            case '>=150':
                if ($data >= 150) {
                    $repose['bar3']['condition'] = $test->getCondition3DeBarre3();
                    $repose['bar3']['point'] = $test->getPoints3DeBarre3();
                }
                break;
        }


        // swotch for chack all condition for MarkerSpcifiques1
        switch ($test->getCondition2DeMarkersSpecifiques1()) {
            case 'A+ ou A-':
                if (strtolower($data) == "a+" || strtolower($data) == "a-") {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                }
                break;
            case '++':
                if ($data == "++") {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition2DeMarkersSpecifiques1();
                }
                break;
            case '2':
            case 'Compte : 2':
                if ($data == 2) {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition2DeMarkersSpecifiques1();
                }
                break;
            case 'Si "Varus or valgus malalignment" = Yes':
                if ($data == "yes" || $data == "Yes") {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition2DeMarkersSpecifiques1();
                }
                break;
            case 'Yes + Grade 2':
                if ($data == "Yes + Grade 2" || $data == "yes + Grade 2" || strtolower($data) == 'grade 2') {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition2DeMarkersSpecifiques1();
                }
                break;
            case 'Yes + Grade 3':
                if ($data == "Yes + Grade 3" || $data == "yes + Grade 3" || strtolower($data) == 'grade 3') {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition2DeMarkersSpecifiques1();
                }
                break;
            case '>40°':
                if ($data > 40) {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition2DeMarkersSpecifiques1();
                }
                break;
            case '>=61° - 71° <=':
                if ($data >= 61 && $data <= 71) {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition2DeMarkersSpecifiques1();
                }
                break;
            case '>=5 <6':
                if ($data >= 5 && $data < 6) {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition2DeMarkersSpecifiques1();
                }
                break;
            case '>=16,8 - 17,6=<':
                if (floatval($data) >= floatval("16,8") && floatval($data) <= floatval("17,6")) {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition2DeMarkersSpecifiques1();
                }
                break;
            case '>=18,7 - 22,4=<':
                if (floatval($data) >= floatval("18,7") && floatval($data) <= floatval("22,4")) {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition2DeMarkersSpecifiques1();
                }
                break;
            case '> 10,5 - 11,5 =<':
                if (floatval($data) >= floatval("10,5") && floatval($data) <= floatval("11,5")) {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition2DeMarkersSpecifiques1();
                }
                break;
            case '> 11,5 - 12,5 =<':
                if (floatval($data) >= floatval("11,5") && floatval($data) <= floatval("12,5")) {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                }
                break;
            case '<':
                if ($data < $test->getThresholdMax()) {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition2DeMarkersSpecifiques1();
                }
                break;
            case 'IV°':
                if ($data == "IV") {
                    $repose['Marker1']['point'] = $test->getPoints2DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition2DeMarkersSpecifiques1();
                }
                break;
        }
        switch ($test->getCondition3DeMarkersSpecifiques1()) {
            case '+++':
                if ($data == "+++") {
                    $repose['Marker1']['point'] = $test->getPoints3DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition3DeMarkersSpecifiques1();
                }
                break;
            case 'Compte : 3':
                if ($data == 3) {
                    $repose['Marker1']['point'] = $test->getPoints3DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition3DeMarkersSpecifiques1();
                }
                break;
            case 'Yes + Grade 3':
                if ($data == "Yes + Grade 3" || $data == "yes + Grade 3" || strtolower($data) == 'grade 3') {
                    $repose['Marker1']['point'] = $test->getPoints3DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition3DeMarkersSpecifiques1();
                }
                break;
            case '> = 3':
            case 'Compte : >= 3':
                if ($data >= 3) {
                    $repose['Marker1']['point'] = $test->getPoints3DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition3DeMarkersSpecifiques1();
                }
                break;
            case '>71°':
                if ($data > 71) {
                    $repose['Marker1']['point'] = $test->getPoints3DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition3DeMarkersSpecifiques1();
                }
                break;
            case '>= 17,7 - 18,8 =<':
                if (floatval($data) >= floatval("17,7") && floatval($data) <= floatval("18,8")) {
                    $repose['Marker1']['point'] = $test->getPoints3DeMarkersSpcifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition3DeMarkersSpecifiques1();
                }
                break;
            case '>= 22,5 - 23,4 =<':
                if (floatval($data) >= floatval("22,5") && floatval($data) <= floatval("23,4")) {
                    $repose['Marker1']['point'] = $test->getPoints3DeMarkersSpcifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition3DeMarkersSpecifiques1();
                }
                break;
            case '> 11,5':
                if (floatval($data) >= floatval("11,5")) {
                    $repose['Marker1']['point'] = $test->getPoints3DeMarkersSpcifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition3DeMarkersSpecifiques1();
                }
                break;
            case '> 12,5':
                if (floatval($data) >= floatval("12,5")) {
                    $repose['Marker1']['point'] = $test->getPoints3DeMarkersSpcifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition3DeMarkersSpecifiques1();
                }
                break;
            case '>=4 <5':
                if ($data >= 4 && $data < 5) {
                    $repose['Marker1']['point'] = $test->getPoints3DeMarkersSpcifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition3DeMarkersSpecifiques1();
                }
                break;
        }
        switch ($test->getCondition4DeMarkersSpecifiques1()) {
            case 'Compte : 4':
                if ($data == 4) {
                    $repose['Marker1']['point'] = $test->getPoints4DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition4DeMarkersSpecifiques1();
                }
                break;

            case '>=3 <4':
                if ($data >= 3 && $data <= 4) {
                    $repose['Marker1']['point'] = $test->getPoints4DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition4DeMarkersSpecifiques1();
                }
                break;
            case '>18,8':
                if (floatval($data) >= floatval("18,8")) {
                    $repose['Marker1']['point'] = $test->getPoints4DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition4DeMarkersSpecifiques1();
                }
                break;
            case '>23,4':
                if (floatval($data) >= floatval("23,4")) {
                    $repose['Marker1']['point'] = $test->getPoints4DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition4DeMarkersSpecifiques1();
                }
                break;
        }
        switch ($test->getCondition5DeMarkersSpecifiques1()) {
            case 'Compte : 5':
                if ($data == 5) {
                    $repose['Marker1']['point'] = $test->getPoints5DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition5DeMarkersSpecifiques1();
                }
                break;
            case '<3':
                if ($data < 3) {
                    $repose['Marker1']['point'] = $test->getPoints5DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition5DeMarkersSpecifiques1();
                }
                break;
        }
        switch ($test->getCondition6DeMarkersSpecifiques1()) {
            case 'Compte >= 6':
                if ($data >= 6) {
                    $repose['Marker1']['point'] = $test->getPoints6DeMarkersSpecifiques1();
                    $repose['Marker1']['condition'] = $test->getCondition6DeMarkersSpecifiques1();
                }
                break;
            default:
                break;
        }

// end
        return $repose;
    }

    /**
     * @param mixed $test
     * @param float|bool|int|string|null $data
     * @return array
     */
    public function getArr(mixed $test, float|bool|int|string|null $data): array
    {
        return $repose[] = [
            'Noms' => $test->getNoms(),
            'Unit_de_mesure' => $test->getUnitDeMesure(),
            'data' => $data,
            "bar1" => [
                'bar' => $test->getBarre(),
                'point' => $test->getPoints1DeBarre(),
                'condition' => $test->getCondition1(),
                'threshold_min' => $test->getThresholdMin(),
                'threshold_max' => $test->getThresholdMax(),
            ],
            "bar2" => [
                'bar' => $test->getBarre2(),
                'condition' => "",
                'point' => $test->getPoints1DeBarre2(),
            ],
            "bar3" => [
                'bar' => $test->getBarre3(),
                'condition' => "",
                'point' => $test->getPoints1DeBarre3(),
            ],
            "bar4" => [
                'bar' => $test->getBarre4(),
                'condition' => "",
                'point' => $test->getPoints1DeBarre4(),
            ],
            "bar5" => [
                'bar' => $test->getBarre5(),
                'condition' => "",
                'point' => $test->getPoints1DeBarre5(),
            ],
            "Marker1" => [
                'Marker' => $test->getMarkerSpecifiques1(),
                'condition' => "",
                'point' => $test->getPoints1DeMarkersSpecifiques1(),
            ],
            "Marker2" => [
                'Marker' => $test->getMarkerSpecifiques2(),
                'condition' => "",
                'point' => $test->getPoints1DeMarkersSpecifiques2(),
            ],
            "Marker3" => [
                'Marker' => $test->getMarkerSpecifiques3(),
                'condition' => "",
                'point' => $test->getPoints1DeMarkersSpecifiques3(),
            ],

        ];
    }

    /**
     * @param mixed $test
     * @param float|bool|int|string|null $data
     * @return array
     */
    public
    function getFalArr(
        mixed $test,
        float|bool|int|string|null $data
    ): array {
        return $repose[] = [
            'Noms' => $test->getNoms(),
            'Unit_de_mesure' => $test->getUnitDeMesure(),
            'data' => $data,
            "bar1" => [
                'bar' => $test->getBarre(),
                'point' => 0,
                'condition' => $test->getCondition1(),
                'threshold_min' => $test->getThresholdMin(),
                'threshold_max' => $test->getThresholdMax(),
            ],
            "bar2" => [
                'bar' => $test->getBarre2(),
                'condition' => "",
                'point' => 0,
            ],
            "bar3" => [
                'bar' => $test->getBarre3(),
                'point' => 0,
            ],
            "bar4" => [
                'bar' => $test->getBarre4(),
                'point' => 0,
            ],
            "bar5" => [
                'bar' => $test->getBarre5(),
                'point' => 0,
            ],
            "Marker1" => [
                'Marker' => $test->getMarkerSpecifiques1(),
                'point' => 0,
            ],
            "Marker2" => [
                'Marker' => $test->getMarkerSpecifiques2(),
                'point' => 0,
            ],
            "Marker3" => [
                'Marker' => $test->getMarkerSpecifiques3(),
                'point' => 0,
            ],

        ];
    }

    /**
     * @Route ("/api/v1/Bytest",methods={"POST"})
     * @param ManagerRegistry $doctrine
     * @param Request $request
     * @return JsonResponse
     */

    final public function getOneTest(ManagerRegistry $doctrine, Request $request): JsonResponse
    {
        $nom = $request->request->get("Noms");
        $Unit_de_mesure = $request->request->get("Unit_de_mesure");
        $sexe = $request->request->get("sexe");
        $age = $request->request->get("age");
        $data = $request->request->get("data");

        // $test = $doctrine->getRepository(ExcelTable::class)->getTestBy($nom, $Unit_de_mesure, $sexe, $age);
        // $reponse[] = $this->getresTest($test, $data);

        $test = $doctrine->getRepository(Mainset::class)->getTestBy(
            $nom,
            $Unit_de_mesure,
            $sexe,
            $age
        );
        $reponse = $this->getresTest($test[0], $data);

        return $this->json($reponse);
    }

}