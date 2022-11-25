$(function(){
    $("form[name='admform']").validate({
            rules:
            {
                adm_class: {
                            required: true,
                           },
                lschool: {
                            required: true,
                            minlength: 10,
                            maxlength:40
                        },
                mboard: {
                            required: true
                 },
                mroll: {
                            required: true,
                            minlength: 9,
                            maxlength: 15
                        },
                fullmark: {
                            required: true,
                            digits: true
                        },
                aggr: {
                            required: true,
                            digits: true
                      },
                gegr: {
                        required: true,
                        digits: true,
                        min: 25,
                        max: 100
                    },
                math: {
                        required: true,
                        digits: true,
                        min: 25,
                        max: 100
                    },
                lsc: {
                        required: true,
                        digits: true,
                        min: 25,
                        max: 100
                    },
                stream: {
                            required: true
                        },
                combi: {
                            required: true
                        },
                sname: {
                            required: true,
                            minlength: 5
                        },
                gender:{
                        required: true
                    },
                
                saadhaar: {
                            //required: true,
                            minlength: 12,
                            maxlength: 12
                        },
                bid: {
                            minlength: 14,
                            maxlength: 14
                        },
                contact: {
                            required: true,
                            minlength: 10,
                            maxlength: 10
                        },
                contact2: {
                            minlength: 10,
                            maxlength: 10
                        },
                religion: {
                            required: true
                        },
                blood: {
                            //required: true
                        },
                caste: {
                            required: true
                        },
                fname: {
                            required: true,
                            minlength: 5
                        },
                faadhaar: {
                           // required: true,
                            minlength: 12,
                            maxlength: 12
                        },
                foccu: {
                        //    required: true,
                            minlength: 5,
                            maxlength:20
                        },
                mname: {
                            required: true,
                            minlength: 5
                        },
                maadhaar: {
                          //  required: true,
                            minlength: 12,
                            maxlength: 12
                        },
                moccu: {
                         //   required: true,
                            minlength: 5,
                            maxlength:20
                        },
                gname: {
                            required: true,
                            minlength: 5
                        },
                gaadhaar: {
                            required: true,
                            minlength: 12,
                            maxlength: 12
                        },
                goccu: {
                            required: true,
                            minlength: 5,
                            maxlength:20
                        },
                rguard: {
                            required: true,
                            minlength: 5,
                            maxlength:15
                        },
                income:{
                            required: true,
                            digits: true,
                },
                road:    {
                            minlength: 0,
                            maxlength:30
                        },
                town: {
                            required: true,
                            minlength: 4,
                            maxlength:20
                        },
                munic: {
                            required: true,
                            minlength: 4,
                            maxlength:20
                        },
                po: {
                            required: true,
                            minlength: 4,
                            maxlength:20
                        },
                ps: {
                            required: true,
                            minlength: 4,
                            maxlength:20
                        },
                pin: {
                            required: true,
                            minlength: 6,
                            maxlength: 6
                        },
                declare: {
                            required: true
                        },
            },
              messages: {
                adm_class: {
                                required: "Select Admission Class ",
                   },
                  lschool: 
                        {
                            required: "Previous School Name Required",
                            minlength: "Enter a valid School Name"
                        },
                 mboard: {
                            required: "Select Board"
                 },
                 mroll: {
                            required: "Madhyamik Roll is Required",
                            minlength: "Recheck Roll & No"
                        },
                fullmark: {
                            required: "Enter Full Marks",
                        },
                
                aggr: {
                            required: "Enter Marks Obtained",
                        },
                gegr: {
                            required: "Marks Required",
                            min: "You are Funny",
                            max: "You are Funny"
                        },
                math: {
                            required: "Marks Required",
                            min: "You are Funny",
                            max: "You are Funny"
                        },
                lsc: {
                            required: "Marks Required",
                            min: "You are Funny",
                            max: "You are Funny"
                        },
                stream: {
                            required: "Choose a stream",
                        },
                combi: {
                            required: "Choose a Combination",
                        },
                sname: 
                        {
                            required: "Applicant Name Required",
                            minlength: "Are you a Ghajini?"
                        },
                    dob:{
                           // required: "<br/>Date of Birth Needed",
                    },
                
                saadhaar: 
                        {
                            required: "AADHAAR is Required",
                            minlength: "Check Again",
                            maxlength: "Check Again",
                        },
                bid: 
                        {
                            minlength: "Check Again",
                            maxlength: "Check Again",
                        },
                contact: 
                        {
                            required: "Contact No is Required",
                            minlength: "Check Again",
                            maxlength: "Check Again",
                        },
                contact2: 
                        {
                            minlength: "Check Again",
                            maxlength: "Check Again",
                        },
                religion: {
                            required: "Choose from List",
                        },
                blood: {
                            required: "Choose from List",
                        },
                caste: {
                            required: "Choose from List",
                        },
                subcaste:{
                            required: "Subcaste is Required",
                },
                fname: 
                        {
                            required: "Father Name Required",
                            minlength: "Valid Name Required"
                        },
                faadhaar: 
                        {
                        //    required: "AADHAAR is Required",
                            minlength: "Check Again",
                            maxlength: "Check Again",
                        },
                foccu: 
                        {
                         //   required: "This info is Required",
                            minlength: "Valid Occupation Required"
                        },
                mname: 
                        {
                            required: "Mother Name Required",
                            minlength: "Valid Name Required"
                        },
                maadhaar: 
                        {
                         //   required: "AADHAAR is Required",
                            minlength: "Check Again",
                            maxlength: "Check Again",
                        },
                moccu: 
                        {
                         //   required: "This info is Required",
                            minlength: "Valid Occupation Required"
                        },
                gname: 
                        {
                            required: "Guardian Name Required",
                            minlength: "Valid Name Required"
                        },
                gaadhaar: 
                        {
                            required: "AADHAAR is Required",
                            minlength: "Check Again",
                            maxlength: "Check Again",
                        },
                goccu: 
                        {
                            required: "This info is Required",
                            minlength: "Valid Occupation Required"
                        },
                rguard: 
                        {
                            required: "Relationship is Required",
                            minlength: "Valid Relation Required"
                        },
                income: {
                            required: "Family Income is Required"
                },
                town: 
                        {
                            required: "This field is Required",
                            minlength: "Valid Locality Required"
                        },
                munic: 
                        {
                            required: "This field is Required",
                            minlength: "Valid Name Required"
                        },
                po: 
                        {
                            required: "Post Office Name Required",
                            minlength: "Post Office Name invalid"
                        },
                ps: 
                        {
                            required: "Police Station Name is Required",
                            minlength: "Police Station Name invalid"
                        },
                pin: 
                        {
                            required: "Pincode Required",
                            minlength: "Invalid Pincode",
                            maxlength: "Invalid Pincode"
                        },
                // declare: {
                //             required: "Accept the Declaration"
                //         },
              },
               submitHandler: function (form) 
               { 
                alert('Recheck Form Before Submit. Once Submitted Data cannot be changed'); 
                return true;
        }

            
        });
    });