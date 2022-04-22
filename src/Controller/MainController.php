<?php

namespace App\Controller;

use App\Entity\Fromtest;
use Doctrine\ORM\EntityManagerInterface;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class MainController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    #[Route('/test', name: 'test')]
    public function showTest(Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createFormBuilder()
            ->add('prenom', TextType::class, [
                'label' => 'Prénom :',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Prénom',
                ],
                'row_attr' => [
                    'class' => 'form-control',
                ],])
            ->add('noms', TextType::class, [
                'label' => 'Nom : ',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Noms',
                ],
                'row_attr' => [
                    'class' => 'form-control',
                ],])
            ->add('sexe', ChoiceType::class, [
                'label' => 'Sexe : ',
                'required' => false,
                'choices' => [
                    'Man' => 'H',
                    'Woman' => 'F',
                ], 'row_attr' => [
                    'class' => 'form-control',
                ],])
            ->add('bloodGroup', ChoiceType::class, [
                'label' => "Blood group : ",
                'required' => false,
                'choices' => [
                    'O+' => 'o+',
                    'O-' => 'o-',
                    'A+' => 'a+',
                    'A-' => 'a-',
                    'B-' => 'b-',
                    'B+' => 'b+',
                    'AB+' => 'ab+',
                    'AB-' => 'ab-',
                ], 'row_attr' => [
                    'class' => 'form-control',
                ]])
            ->add('Favorable_background_conditions', ChoiceType::class, [
                'label' => "Favorable background conditions : ",
                'choices' => [
                    'Yes' => 'Yes',
                    'No' => 'No',
                    'Autre' => ''
                ], 'required' => false,
                 'row_attr' => [
                    'class' => 'form-control',
                ],])
            ->add('age', NumberType::class, [
                'label' => 'Age :',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Age',
                ],
                'row_attr' => [
                    'class' => 'form-control',
                ],])
            ->add('height', NumberType::class, [
                'label' => 'Height : ',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Height',
                    'onchange'=>"BMI(event);"
                ],
                'row_attr' => [
                    'class' => 'form-control',
                ],])
            ->add('Weight', NumberType::class, [
                'label' => 'Weight : ',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Weight',
                    'onchange'=>"BMI(event);"
                ],
                'row_attr' => [
                    'class' => 'form-control',
                ],])
            ->add('position_sport', TextType::class, [
                'label' => 'position/sport :',
                'required' => false,
                'attr' => [
                    'placeholder' => 'Position/Sport',
                ],
                'row_attr' => [
                    'class' => 'form-control',
                ],])
            ->add('date_of_birth', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'format' => 'yyyy-MM-dd', 'attr'=>['onchange'=>"handler(event);"]])
            ->add('bmit', TextType::class,
                ['label' => 'BMI',  'required' => false,
                    'attr' => ['placeholder' => 'BMI'],
                    'row_attr' => ['class' => 'form-control']])
            ->add('send', SubmitType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $filedate = $em->getRepository(Fromtest::class)->findBySexe(array($data['sexe'], 'a'));
            foreach ($filedate as $test) {
                if ($test->getNoms() === "Date") {
                    $list[] = [
                        $test->getNoms(),
                        $test->getUnitDeMesure(),
                        new \DateTime('now')
                    ];
                } elseif ($test->getNoms() === "Name") {
                    $list[] = [
                        $test->getNoms(),
                        $test->getUnitDeMesure(),
                        $data['prenom']
                    ];
                } elseif ($test->getNoms() === "Surname") {
                    $list[] = [
                        $test->getNoms(),
                        $test->getUnitDeMesure(),
                        $data['noms']
                    ];
                } elseif ($test->getNoms() === "Man or Woman") {
                    $list[] = [
                        $test->getNoms(),
                        $test->getUnitDeMesure(),
                        $data['sexe']
                    ];
                } elseif ($test->getNoms() === "Age") {
                    $list[] = [
                        $test->getNoms(),
                        $test->getUnitDeMesure(),
                        $data['age']
                    ];
                } elseif ($test->getNoms() === "Date of birth") {
                    $list[] = [
                        $test->getNoms(),
                        $test->getUnitDeMesure(),
                        $data['date_of_birth']
                    ];
                } elseif ($test->getNoms() === "Blood group") {
                    $list[] = [
                        $test->getNoms(),
                        $test->getUnitDeMesure(),
                        $data['bloodGroup']
                    ];
                } elseif ($test->getNoms() === "Position/Sport") {
                    $list[] = [
                        $test->getNoms(),
                        $test->getUnitDeMesure(),
                        $data['position_sport']
                    ];
                } elseif ($test->getNoms() === "Height") {
                    $list[] = [
                        $test->getNoms(),
                        $test->getUnitDeMesure(),
                        $data['height']
                    ];
                } elseif ($test->getNoms() === "Weight") {
                    $list[] = [
                        $test->getNoms(),
                        $test->getUnitDeMesure(),
                        $data['Weight']
                    ];
                } elseif ($test->getNoms() === "BMI") {
                    $list[] = [
                        $test->getNoms(),
                        $test->getUnitDeMesure(),
                        $data['BMI']
                    ];
                } elseif ($test->getNoms() === "Favorable background conditions") {
                    $list[] = [
                        $test->getNoms(),
                        $test->getUnitDeMesure(),
                        $data['Favorable_background_conditions']
                    ];
                } else {
                    if (in_array(array($test->getNoms(), $test->getUnitDeMesure()), $list, true)) {
                        continue;
                    }
                    else {
                        $list[] = [
                            $test->getNoms(),
                            $test->getUnitDeMesure(),
                            ''
                        ];
                    }
                }
            }

            $spreadsheet = new Spreadsheet();

            $sheet = $spreadsheet->getActiveSheet();

            $sheet->setTitle('User Test');

            $sheet->getCell('A1')->setValue('Noms');
            $sheet->getCell('B1')->setValue('Unit_de_mesure');
            $sheet->getCell('C1')->setValue('Data');

            // Increase row cursor after header write
            $sheet->fromArray($list, null, 'A2', true);

            $writer = new Xlsx($spreadsheet);

            // Create a Temporary file in the system
            $fileName = $data["noms"] . '-test.xlsx';
            $temp_file = tempnam(sys_get_temp_dir(), $fileName);
            // Create the excel file in the tmp directory of the system
            $writer->save($temp_file);
            // Return the excel file as an attachment
            return $this->file($temp_file, $fileName, ResponseHeaderBag::DISPOSITION_INLINE);
        }
        return $this->render('main/test.html.twig', [
            'controller_name' => 'MainController',
            'form' => $form->createView()
        ]);
    }
}
