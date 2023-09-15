
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="csrf-token" content="UdjZANPRrognYsWPfyNTpwnDT0mJXcGCbT9EYxSw">
    <meta name="description" content="Fullcircle GeoSocial Network">

    <title>Interest</title>

    <!-- Google Fonts Roboto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lexend&family=Open+Sans&family=Poppins:wght@400;500;600&family=Roboto&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
          integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>

    <style>
        select {
            padding-top: 10px; /* Adjust the padding as needed */
            margin-top: 2px; /* Adjust the margin from the top as needed */
            border: none; /* Remove the border */
            outline: none; /* Remove the outline when clicked */
            overflow: hidden; /* Remove the scrollbar */
            font-size: 10px; /* Adjust the font size as needed */
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            text-indent: 1px;
            text-overflow: '';
            width: auto;
        }

        option {
            font-size: 25px; /* Adjust the font size of the options as needed */
            margin: 5px; /* Add spacing between options */
            padding: 5px; /* Add padding for better readability */
            box-sizing: border-box;
        }

        .option-row {
            white-space: nowrap; /* Prevent options from wrapping within a row */
        }
        .option-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px; /* Adjust the gap between options */
        }

        .option-container .option-row {
            flex: 1;
            flex-basis: calc(25% - 10px); /* 25% width for each option with gap */
        }
    </style>


    <!-- Livewire Styles --><style >[wire\:loading], [wire\:loading\.delay], [wire\:loading\.inline-block], [wire\:loading\.inline], [wire\:loading\.block], [wire\:loading\.flex], [wire\:loading\.table], [wire\:loading\.grid], [wire\:loading\.inline-flex] {display: none;}[wire\:loading\.delay\.shortest], [wire\:loading\.delay\.shorter], [wire\:loading\.delay\.short], [wire\:loading\.delay\.long], [wire\:loading\.delay\.longer], [wire\:loading\.delay\.longest] {display:none;}[wire\:offline] {display: none;}[wire\:dirty]:not(textarea):not(input):not(select) {display: none;}[x-cloak] {display: none;}</style>
    <link rel="preload" as="style" href="https://fullcircle.net/build/assets/app-0894452b.css" /><link rel="stylesheet" href="https://fullcircle.net/build/assets/app-0894452b.css" data-navigate-track="reload" /></head>
<body>
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v17.0&appId=284883280832759&autoLogAppEvents=1"
        nonce="MlbkK2QD"></script>

<div class="container-fluid pb-5 pt-sm-3 ps-sm-5">
    <a href="{{url('/')}}">
        <img
            src="https://fullcircle.net/build/assets/logo-b3e15590.svg"
            height="60"
            alt="Fullcircle Logo"
            loading="lazy"
        />
    </a>
</div>
<form action="{{route('interests')}}" method="post">
    @csrf
    <div class="container profile mt-3 px-4">
        <div class="d-flex flex-column align-items-center justify-content-center gap-1 gap-sm-3 mb-5">
            <h1 class="heading">Likes & Interests</h1>
            <p class="subtitle">Choose three or more</p>
            <label>
                <select size="9" name="interests[]" multiple="multiple" required>
                    <div class="option-container">
                        <div class="option-row">
                            <option id="1"  value="1">📷 Photography</option>
                        </div>
                        <div class="option-row">
                            <option id="2"  value="2">🍝 Cooking</option>
                        </div>
                        <div class="option-row">
                            <option id="3" value="3">✈ Travelling</option>
                        </div>
                        <div class="option-row">
                            <option id="4" value="4">🎮 Video Game</option>
                        </div>
                        <div class="option-row">
                            <option id="5" value="5">🤾‍♀️ Fitness</option>
                        </div>
                        <div class="option-row">
                            <option id="5" value="6">🎶 Music</option>
                        </div>
                        <div class="option-row">
                            <option id="6" value="7">🍷 Drinking</option>
                        </div>
                        <div class="option-row">
                            <option id="7" value="8">🛍️ Shopping</option>
                        </div>

                    </div>
                </select>
            </label>
            <button class="btn btn-success" type="submit"> Continue</button>
        </div>
    </div>

</form>


<!-- Livewire Scripts -->

<link rel="modulepreload" href="https://fullcircle.net/build/assets/app-4ece1411.js" /><script type="module" src="https://fullcircle.net/build/assets/app-4ece1411.js" data-navigate-track="reload"></script></body>
</html>
