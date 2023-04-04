<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    @include('navbar')
    <h1>About LowBud</h1><hr />
    <p>LowBud is an opensource project dedicated to browse and compile offers from different supermarkets. At the moment since 
        the creator (me) is located in Spain, they're all Spanish supermarkets
    </p><hr/>
    <h2>How offers are compiled?</h2><hr />
    <p>I use a NodeJS library called Puppeteer, which is a headless browser. The browser search certain DOM elements that contain the information
        about the products we need, right now is just price and title. After the browser does its function, a little program writes all the data in 
        a CSV file.
    </p>
    <h2>Why use NodeJs and Laravel?</h2><hr />
    <p>My intention was to do everything with Laravel but I realized that doing scraping on websites with Laravel libraries was 
        very complicated for me and if I delved into this matter I would spend a long time finding out a correct way. 
        I decided to use Puppeteer because it was faster and easier for the level that I have
    </p><hr />

</body>
</html>