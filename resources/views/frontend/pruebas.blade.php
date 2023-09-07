@extends('plantillas.plantilla')
@section('titulo')
    Inicio | Biblioteca Virtual
@endsection
@section('contenido')
    <!-- DevExtreme theme -->
    {{-- <link rel="stylesheet" href="https://cdn3.devexpress.com/jslib/23.1.4/css/dx.light.css"> --}}
    <link rel="stylesheet" href="{{route('frontend.index')}}/css/styles-devextreme.css">

    <!-- DevExtreme library -->
    <script type="text/javascript" src="https://cdn3.devexpress.com/jslib/23.1.4/js/dx.all.js"></script>
    <div class="dx-swatch-custom-scheme">
        <div id="form"> </div>
    </div>
    <style>
        .first-group,
        .second-group {
            padding: 20px;
        }

        .second-group {
            background-color: rgba(191, 191, 191, 0.15);
        }

        .form-avatar {
            height: 128px;
            width: 128px;
            margin-right: 10px;
            border: 1px solid #d2d3d5;
            border-radius: 50%;
            background-image: url('images/petersmith.png');
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
        }
    </style>
    <script>
        const employee = {
            ID: 1,
            FirstName: 'John',
            LastName: 'Heart',
            Position: 'CEO',
            BirthDate: '1964/03/16',
            HireDate: '1995/01/15',
            Notes: 'John has been in the Audio/Video industry since 1990. He has led DevAV as its CEO since 2003.\r\nWhen not working hard as the CEO, John loves to golf and bowl. He once bowled a perfect game of 300.',
            Address: '351 S Hill St.',
            City: 'Los Angeles',
            State: 'CA',
            ZipCode: '90013',
            Home: '555-684-1334',
            Mobile: '555-684-1335',
            Email: 'jheart@dx-email.com',
            Skype: 'jheart_DX_skype',
        };

        const positions = [
            'HR Manager',
            'IT Manager',
            'CEO',
            'Controller',
            'Sales Manager',
            'Support Manager',
            'Shipping Manager',
        ];

        const states = ['AL', 'AK', 'AZ', 'AR', 'CA', 'CO', 'CT', 'DE', 'FL', 'GA', 'HI', 'ID', 'IL', 'IN', 'IA', 'KS',
            'KY', 'LA', 'ME', 'MD', 'MA', 'MI', 'MN', 'MS', 'MO', 'MT', 'NE', 'NV', 'NH', 'NJ', 'NM', 'NY', 'NC', 'ND',
            'OH', 'OK', 'OR', 'PA', 'RI', 'SC', 'SD', 'TN', 'TX', 'UT', 'VT', 'VA', 'WA', 'WV', 'WI', 'WY'
        ];
    </script>
    <script>
        $(() => {
            $('#form').dxForm({
                formData: employee,
                items: [{
                    itemType: 'group',
                    cssClass: 'first-group',
                    colCount: 4,
                    items: [{
                        template: "<div class='form-avatar'></div>",
                    }, {
                        itemType: 'group',
                        colSpan: 3,
                        items: [{
                            dataField: 'FirstName',
                            // class input
                            editorOptions: {
                                stylingMode: 'filled',
                            },
                        }, {
                            dataField: 'LastName',
                        }, {
                            dataField: 'BirthDate',
                            editorType: 'dxDateBox',
                            editorOptions: {
                                width: '100%',
                            },
                        }],
                    }],
                }, {
                    itemType: 'group',
                    cssClass: 'second-group',
                    colCount: 2,
                    items: [{
                        itemType: 'group',
                        items: [{
                            dataField: 'Address',
                        }, {
                            dataField: 'City',
                        }, {
                            dataField: 'Position',
                            editorType: 'dxSelectBox',
                            editorOptions: {
                                items: positions,
                                value: '',
                            },
                        }],
                    }, {
                        itemType: 'group',
                        items: [{
                            dataField: 'State',
                            editorType: 'dxSelectBox',
                            editorOptions: {
                                items: states,
                            },
                        }, {
                            dataField: 'ZipCode',
                        }, {
                            dataField: 'Mobile',
                            label: {
                                text: 'Phone',
                            },
                            editorOptions: {
                                mask: '+1 (000) 000-0000',
                            },
                        }],
                    }, {
                        colSpan: 2,
                        dataField: 'Notes',
                        editorType: 'dxTextArea',
                        editorOptions: {
                            height: 140,
                        },
                    }],
                }],
            });
        });
    </script>
@endsection
