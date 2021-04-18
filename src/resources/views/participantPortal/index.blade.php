@extends('layouts.researcherlayout')
@section('title','Welcome to VWS')
@section('layout')
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS ORDER MATTERS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/dashboard/index.css" />
    <link rel="stylesheet" href="/css/dashboard/sidebar.css" />
	<link rel="stylesheet" href="/css/dashboard/mainrightbar.css" />

	<script src="https://kit.fontawesome.com/555936ed9c.js" crossorigin="anonymous"></script>
    <title>About VWS</title>

</head>

<body>
    <div class="main">
        @section('leftsidebar')
            @include('dashboard.leftsidebar')
        @show

		<section class="right-panel" >
            <div class="main-header-img">
                <img src="https://www.upei.ca/sites/default/files/styles/crop_header_image/public/sdu_main_winter.jpg?h=b9e11ae9&itok=Pkv2bCnk" height="960" width="1650"></img>
            </div>
            <div class="main-content">
                <h2>What is Virtual Wellness System?</h2>

                <p>
                The Vitual Wellness System is a system that allow users to enter data, chart about their progress and recieve useful suggestions on how to improve their health.
                </p>
            </div>
            <v-container>
                <h2>What is the purpose of Virtual Wellness System?</h2>
                <p>
                The purpose of the Virtual Wellness System is to monitor and report on the health and status of patients in between their regularly scheduled appointments. Initially, the clients of Dr. Montelpare’s clinic do not have many resources to stay healthy once they finish their usual appointments. Due to this, it may be difficult for patients to monitor and stay on top of their required regiments in order to maintain their health. With the Virtual Wellness System, clients of the clinic will be able to input the necessary data, track their metrics online and see how close they are in completing their health goals. By showing the users how well they are proceeding in their training and health regiments, it will provide feedback to them so that they can be motivated to continue on the same path. The data that is acquired from the users will help the clinic strengthen its understanding of potential problems occurring in both its system and its users, as well as help boost research for the field of science.
                </p>
            </v-container>
            <v-container>
                <h2>contact us</h2><div>E-mail: Lorem.</div><div>Phone: Lorem, ipsum dolor.</div>
            </v-container>
		</section>
    </div>
</body>

</html>
