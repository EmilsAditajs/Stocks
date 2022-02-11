<?php

require_once(__DIR__ . '/vendor/autoload.php');

$config = Finnhub\Configuration::getDefaultConfiguration()->setApiKey('token', 'c839j32ad3ift3bm4fhg');
$client = new Finnhub\Api\DefaultApi(
    new GuzzleHttp\Client(),
    $config
);

$search = $_GET['search'] ?? '';

?>

<form method="get" action="/">
    <input name="search"/>
    <button type="submit">Submit</button>
</form>

<?php

if ($search == '') {
    ?>

    <html>

    <style>
        div {
            width: 120px;
            padding: 10px;
            border: 2px solid black;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }

    </style>

    <body>

    <div>
        <p> <?php
            print_r('COIN');
            ?> </p>
        <p> <?php
            print_r($client->quote('COIN')->getC());
            ?> </p>
        <?php
        if ($client->quote('COIN')->getD() < 0) {
            ?>
            <p style="color:red;"> <?php
                print_r($client->quote('COIN')->getD());
                ?> </p>
        <?php } else { ?>
            <p style="color:green;"> <?php
                print_r($client->quote('COIN')->getD());
                ?> </p>
        <?php } ?>
    </div>

    <div>
        <p> <?php
            print_r('AMAT');
            ?> </p>
        <p> <?php
            print_r($client->quote('AMAT')->getC());
            ?> </p>
        <?php
        if ($client->quote('AMAT')->getD() < 0) {
            ?>
            <p style="color:red;"> <?php
                print_r($client->quote('AMAT')->getD());
                ?> </p>
        <?php } else { ?>
            <p style="color:green;"> <?php
                print_r($client->quote('AMAT')->getD());
                ?> </p>
        <?php } ?>
    </div>

    <div>
        <p> <?php
            print_r('INTC');
            ?> </p>
        <p> <?php
            print_r($client->quote('INTC')->getC());
            ?> </p>
        <?php
        if ($client->quote('INTC')->getD() < 0) {
            ?>
            <p style="color:red;"> <?php
                print_r($client->quote('INTC')->getD());
                ?> </p>
        <?php } else { ?>
            <p style="color:green;"> <?php
                print_r($client->quote('INTC')->getD());
                ?> </p>
        <?php } ?>
    </div>

    <div>
        <p> <?php
            print_r('PFE');
            ?> </p>
        <p> <?php
            print_r($client->quote('PFE')->getC());
            ?> </p>
        <?php
        if ($client->quote('PFE')->getD() < 0) {
            ?>
            <p style="color:red;"> <?php
                print_r($client->quote('PFE')->getD());
                ?> </p>
        <?php } else { ?>
            <p style="color:green;"> <?php
                print_r($client->quote('PFE')->getD());
                ?> </p>
        <?php } ?>

    </div>

    </body>

    </html>
    <?php
} else {
    ?>

    <style>
        div {
            width: 120px;
            padding: 10px;
            border: 2px solid black;
            margin-left: auto;
            margin-right: auto;
            text-align: center;
        }


    </style>

    <body>

    <div>
        <p> <?php
            print_r($search);
            ?> </p>
        <p> <?php
            print_r($client->quote($search)->getC());
            ?> </p>
        <?php
        if ($client->quote($search)->getD() < 0) {
            ?>
            <p style="color:red;"> <?php
                print_r($client->quote($search)->getD());
                ?> </p>
        <?php } else { ?>
            <p style="color:green;"> <?php
                print_r($client->quote($search)->getD());
                ?> </p>
        <?php } ?>
    </div>

    </body>

    </html>

    <?php
}
?>
