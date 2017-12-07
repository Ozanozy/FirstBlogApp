<?php ?>

<html>
<head>
    <title>Duzenle</title>
</head>
<body>
<form name="sentMessage" id="contactForm"

      action="makale-gonder" method="post" novalidate>
    <!-- Contact Form -->
    <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <div class="row">
        <div class="col-md-8">
            <h3>Send us a Message</h3>

            {!! csrf_field()!!}}
            <div class="control-group form-group">
                <div class="controls">
                    <label>Makale'nin Başlığı:</label>
                    <input name="baslik" type="text" class="form-control" id="baslik">
                    <p class="help-block"></p>
                </div>

            </div>
</body>

</html>
