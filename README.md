# Email Notification Library using phpMailer

This library has the function to send email using the phpmailer library. Making this action uncomplicated is essential for any system.

To install the library, run the following command:

```sh
composer require gustavoweb/composer_test
```

To make use of the library, just require composer autoload, invoke the class and call the method:

```sh
<?php

require __DIR__ . '/vendor/autoload.php';

USE Notification\Email;

$email = new Email(2, "mail.host.com", "your@email.com", "your-pass", "smtp secure (tls/ssl)", "port (587)",
    "from@email.com", "From Name");

$email->sendEmail("SUbject", "Content", "reply@email.com", "Replay Name", "address@email.com", "Address Name");
```

Note that the entire configuration of sending the email is using the magic constructor method! Once the constructor method is invoked within your application, your system will be able to perform the triggers.

### Developers
* [Gustavo Web] - Developer of this library and tutor of the Composer in Practice course!
* [Robson V. Leite] - CEO and Founder UpInside Treinamentos
* [UpInside Treinamentos] - Official website of your digital programming and marketing school
* [phpMailer] - Lib to send E-mail

License
----

MIT

**Another UpInside Treinamentos course, make good use of it!**

[//]:#
[Gustavo Web]: <mailto:gustavo@upinside.com.br>
[Robson V. Leite]: <mailto:robson@upinside.com.br>
[UpInside Treinamentos]: <https://www.upinside.com.br>
[phpMailer]: <https://github.com/PHPMailer/PHPMailer>

