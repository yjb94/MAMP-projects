<html>
<head>
    <title>Codeigniter Form Submit Using Post and Get Method</title>
    <style>
        body {
            font-family: 'Raleway', sans-serif;
        }
        .main
        {
            width: 1015px;
            position: absolute;
            top: 10%;
            left: 20%;
        }
        #form_head
        {
            text-align: center;
            background-color: #FEFFED;
            height: 66px;
            margin: 0 0 -29px 0;
            padding-top: 35px;
            border-radius: 8px 8px 0 0;
            color: rgb(97, 94, 94);
        }
        #content {
            position: absolute;
            width: 450px;
            height: 356px;
            border: 2px solid gray;
            border-radius: 10px;
        }
        #content_result{
            position: absolute;
            width: 450px;
            height: 192px;
            border: 2px solid gray;
            border-radius: 10px;
            margin-left: 559px;
            margin-top: -262px;
        }
        #form_input
        {
            margin-left: 50px;
            margin-top: 36px;
        }
        label
        {
            margin-right: 6px;
            font-weight: bold;
        }

        #form_button{
            padding: 0 21px 15px 15px;
            position: absolute;
            bottom: 0px;
            width: 414px;
            background-color: #FEFFED;
            border-radius: 0px 0px 8px 8px;
            border-top: 1px solid #9A9A9A;
        }
        .submit{
            font-size: 16px;
            background: linear-gradient(#ffbc00 5%, #ffdd7f 100%);
            border: 1px solid #e5a900;
            color: #4E4D4B;
            font-weight: bold;
            cursor: pointer;
            width: 300px;
            border-radius: 5px;
            padding: 10px 0;
            outline: none;
            margin-top: 20px;
            margin-left: 15%;
        }
        .submit:hover{
            background: linear-gradient(#ffdd7f 5%, #ffbc00 100%);
        }
        .label_output
        {
            color:#4A85AB;
            margin-left: 10px;
        }
        #result_id
        {
            text-align: center;
            background-color: #FCD6F4;
            height: 47px;
            margin: 0 0 -29px 0;
            padding-top: 12px;
            border-radius: 8px 8px 0 0;
            color: rgb(97, 94, 94);
        }
        #result_show
        {
            margin-top: 35px;
            margin-left: 45px;
        }
        .input_box{
            height:40px;
            width:240px;
            padding:20px;
            border-radius:3px;
            background-color:#FEFFED;
        }
    </style>
</head>
<body>
<div class="main">
    <div id="content">
        <h3 id='form_head'>Codelgniter Form Submit </h3><br/>
        <div id="form_input">
            <?php

            // Open form and set URL for submit form
            echo form_open('form/data_submitted');

            // Show Name Field in View Page
            echo form_label('User Name :', 'u_name');
            $data= array(
                'name' => 'u_name',
                'placeholder' => 'Please Enter User Name',
                'class' => 'input_box'
            );
            echo form_input($data);

            // Show Email Field in View Page
            echo form_label('User email:', 'u_email');
            $data= array(
                'type' => 'email',
                'name' => 'u_email',
                'placeholder' => 'Please Enter Email Address',
                'class' => 'input_box'
            );
            echo form_input($data);
            ?>
        </div>

        // Show Update Field in View Page
        <div id="form_button">
            <?php
            $data = array(
                'type' => 'submit',
                'value'=> 'Submit',
                'class'=> 'submit'
            );
            echo form_submit($data); ?>
        </div>

        // Close Form
        <?php echo form_close();?>

        // Display Entered values in View Page

        <?php if(isset($user_name) && isset($user_email_id)){
            echo "<div id='content_result'>";
            echo "<h3 id='result_id'>You have submitted these values</h3><br/><hr>";
            echo "<div id='result_show'>";
            echo "<label class='label_output'>Entered User Name : </label>".$user_name;
            echo "<label class='label_output'>Entered Email: </label>".$user_email_id;
            echo "<div>";
            echo "</div>";
        } ?>
    </div>
</div>
</body>
</html>