# tiu-mail

Get tiu.ru orders and messages from mailbox.

## REQUIREMENTS

* [php imap extension](http://php.net/manual/ru/imap.setup.php)

## Install via Composer

Run the following command

```bash
$ composer require tpmanc/tiu-mailbox "*"
```

or add

```bash
$ "tpmanc/tiu-mailbox": "*"
```

to the require section of your `composer.json` file.

## Usage

```php
$tiu = new tpmanc\tiu\Tiu('{imap.yandex.ru:993/imap/ssl}INBOX', 'login@ya.ru', 'password');
$tiu = $tiu->setLimit(50); // set mail count per page (default = 20)
$pageCount = $tiu->getPageCount(); // get page count
$tiu = $tiu->getByPage(0); // find tiu emails on first page

$messages = $tiu->getMessages(); // get array of user messages
$orders = $tiu->getOrders(); // get array of user orders

$tiu->close();
```

### Message object

Info about user message

```php
...

$messages = $tiu->getMessages(); // get array of user messages
foreach ($messages as $message) {
    echo 'tiu id: ' . $message->getId();
    echo 'theme: ' . $message->getTitle();
    echo 'link: ' . $message->getLink();
}
...
```

### Order object

Info about user order

```php
...

$orders = $tiu->getOrders(); // get array of user orders
foreach ($orders as $order) {
    echo 'tiu id: ' . $message->getId();
    echo 'name: ' . $message->getUsername();
    echo 'link: ' . $message->getLink();
}
...
```
