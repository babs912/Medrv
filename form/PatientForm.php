<?php 

class PatientForm
{
    public $form ;
    public function __construct()
    {
        $f = new FormType();


        $this->form = $f->create(
        [
            'attr'=>
            [
                'type' => "text",
                'name'=>"last_name",
                'placeholder'=>"Nom"
            ]
        ],
        "Last Name:").$f->create(
            [
                'attr'=>
                [
                    'type' => 'text',
                    'name'=>"first_name",
                    'placeholder'=>"Prenom"
                ]
            ],
            "First Name:"
            ).$f->create(
            [
                'attr'=>
                [
                    'type' => "number",
                    'name'=>"age",
                    'placeholder'=>"Age"
                ]
            ],
             "Age"
             ).$f->create(
                [
                    'attr'=>
                    [
                        'type' => "radio",
                        'name'=>"gender",
                        'placeholder'=>"Age"
                    ]
                    
                ], "Homme").$f->create(
                    [
                        'attr'=>
                        [
                            'type' => "radio",
                            'name'=>"gender",
                            'placeholder'=>"Age"
                        ]
                        
                    ], "Femme");
    }

    public function getForm()
    {
       return $this->form;
    }

}