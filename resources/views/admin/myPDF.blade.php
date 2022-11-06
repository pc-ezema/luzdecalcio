<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <style>
        @font-face {
            font-family: 'Lato';
            src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Lato';
            src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            font-weight: 500;
            font-style: normal;
        }

        @font-face {
            font-family: 'Lato';
            src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: 'Lato';
            src: local('Lato Regular'), local('Lato-Regular'), url(https://fonts.gstatic.com/s/lato/v11/qIIYRU-oROkIk8vfvxw6QvesZW2xOQ-xsNqO47m55DA.woff) format('woff');
            font-weight: 400;
            font-style: normal;
        }

        body {
            font-size: .9rem;
            font-family: 'Lato', sans-serif;
            font-weight: 400;
            color: #000000;
            margin: 0 auto;
            position: relative;
        }

        #pspdfkit-header {
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 2px;
            font-weight: 400;
            color: #717885;
            margin-top: 2.5rem;
            margin-bottom: 2.5rem;
            width: 100%;
        }

        .header-columns {
            display: flex;
            justify-content: space-between;
            padding-left: 1.5rem;
            padding-right: 1.5rem;
        }

        .logo {
            height: 1.5rem;
            width: auto;
            margin-right: 1rem;
        }

        .logotype {
            display: flex;
            align-items: center;
            font-weight: 700;
        }

        h2 {
            font-family: 'Space Mono', monospace;
            font-size: 1.25rem;
            font-weight: 400;
        }

        h4 {
            font-family: 'Space Mono', monospace;
            font-size: 1rem;
            font-weight: 400;
        }

        .page {
            margin-left: 2rem;
            margin-right: 2rem;
        }

        .intro-table {
            display: flex;
            margin: 3rem 0 1rem 0;
            border: 1px solid #000000;
			width: 100%;
			align-content: center;
			justify-content: center;
			text-align: center;
        }

        .intro-form {
            
            border-right: 1px solid #000000;
            width: 80%;
        }

        .intro-form:last-child {
            border-right: none;
        }

        .intro-table-title {
            font-size: 0.625rem;
            margin: 0;
        }

        .intro-form-item {
            padding: 1.25rem 1.5rem 1.25rem 1.5rem;
        }

        .intro-form-item:first-child {
            padding-left: 0;
        }

        .intro-form-item:last-child {
            padding-right: 0;
        }

        .intro-form-item-border {
            padding: 1.25rem 0 .75rem 1.5rem;
            border-bottom: 1px solid #000000;
        }

        .intro-form-item-border:last-child {
            border-bottom: none;
        }
		
		.intro-form-right {
     
            border-right: 1px solid #000000;
            width: 40%;
        }

        .intro-form-right:last-child {
            border-right: none;
        }

        .form {
            display: flex;
            flex-direction: column;
        }

        .no-border {
            border: none;
        }

        .border {
            border: 1px solid #000000;
        }

        .border-bottom {
            border: 1px solid #000000;
            border-top: none;
            border-left: none;
            border-right: none;
        }

        .signer {
            display: flex;
            justify-content: space-between;
            gap: 2.5rem;
            margin: 2rem 0 2rem 0;
        }

        .signer-item {
            flex-grow: 1;
        }

        input {
            color: #4537DE;
            font-family: 'Space Mono', monospace;
            text-align: center;
            margin-top: 1.5rem;
            height: 4rem;
            width: 100%;
            box-sizing: border-box;
        }

        input#date,
        input#notes {
            text-align: left;
        }

        input#signature {
            height: 8rem;
        }

        .intro-text {
            width: 60%;
        }

        .table-box table,
        .summary-box table {
            width: 100%;
            font-size: 1.5rem;
        }

        .table-box table {
            padding-top: 2rem;
        }

        .table-box td:first-child,
        .summary-box td:first-child {
            width: 30%;
        }

        .table-box td:last-child,
        .summary-box td:last-child {
            text-align: right;
        }

        .table-box table tr.heading td {
            border-top: 1px solid #000000;
            border-bottom: 1px solid #000000;
            height: 1.5rem;
        }

        .table-box table tr.item td,
        .summary-box table tr.item td {
            border-bottom: 1px solid #D7DCE4;
            height: 1.5rem;
        }

        .summary-box table tr.no-border-item td {
            border-bottom: none;
            height: 1.5rem;
        }

        .summary-box table tr.total td {
            border-top: 1px solid #000000;
            border-bottom: 1px solid #000000;
            height: 1.5rem;
        }

        .summary-box table tr.item td:first-child,
        .summary-box table tr.total td:first-child {
            border: none;
            height: 1.5rem;
        }

        #pspdfkit-footer {
            font-size: 1rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 500;
            color: #717885;
            margin-top: 2.5rem;
            bottom: 2.5rem;
            position: absolute;
            width: 100%;
        }

        .footer-columns {
            display: flex;
            justify-content: space-between;
            padding-left: 2.5rem;
            padding-right: 2.5rem;
        }
    </style>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css'>
</head>

<body>
    <!-- <div id="pspdfkit-header">
        <div class="header-columns">
            <div class="logotype">
                <img class="logo" src="{{URL::asset('images/logo.png')}}" alt="{{config('app.name')}}">
            </div>
        </div>
    </div> -->

    <div class="page">
        <div style="text-align: center;">
            <h2>
                Luz de Calcio Center for Support of African Innovations.
            </h2>
        </div>
        <div style="text-align: center;">
            <h2>
                {{$invention->fullname}} Invention Details
            </h2>
        </div>

        <div class="intro-table">
            <div class="intro-form intro-form-item">
                <p>
                    <strong>Category :</strong><br>{{$invention->category}}
                </p>
                <p>
                    @if($invention->groupleadername == null)
                    <strong>Group Leader Name:</strong><br>None
                    @else
                    <strong>Group Leader Name :</strong><br>{{$invention->groupleadername}}
                    @endif
                </p>
                <p><strong>Full Name/Group Name :</strong><br>{{$invention->fullname}}</p>
                <p>
                    @if($invention->groupnumber == null)
                    <strong>Group Number:</strong> <br>None
                    @else
                    <strong>Group Number:</strong><br>{{$invention->groupnumber}}
                    @endif
                </p>
                <p><strong>Email :</strong><br>{{$invention->email}}</p>
				<p><strong>Phone Number :</strong><br>{{$invention->phone}}</p>
                <p><strong>Age Category :</strong><br>{{$invention->age}}</p>
                <p><strong>Educational Level :</strong><br>{{$invention->level}}</p>
                <p><strong>City / State :</strong><br>{{$invention->citystate}}</p>
                <p><strong>Country :</strong><br>{{$invention->country}}</p>
                <p><strong>Invention Name</strong><br>{{$invention->projectname}}</p>
				<p><strong>What makes it a difference from other existing works?</strong><br>{{$invention->difference}}</p>
				<p><strong>Is your project patented?</strong><br>{{$invention->patent}}</p>
				<p><strong>Has this project been registered before on another platform?</strong><br>{{$invention->registered}}</p>
				<p><strong>What other problems can it solve?</strong><br>{{$invention->importance}}</p>
				<p><strong>Working details of Invention</strong><br>{{$invention->workingdetails}}</p>
				<p><strong>Cost of the Project</strong><br>{{$invention->cost}}</p>
				<p><strong>Invention Name</strong><br>{{$invention->projectname}}</p>
            </div>
        </div>
        <div class="signer">
            <div class="form signer-item">
                <label for="date" class="label">Date:</label>
                <input type="text" id="date" class="border-bottom" value="{{$invention->created_at->toDateTimeString()}}">
            </div>
        </div>
    </div>
</body>

</html>