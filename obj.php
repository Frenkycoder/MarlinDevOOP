<?php

/*
Баскетболіст
ціль - грати баскетбол
Атр - позиція,ім'я,номер
Поведінка - бігати(),пасувати(),кидати(),банка()
Цикл
бігати()
кидати()
пасувати()
банка()
*/
class Baller
{
public $position;
public $name;
public $number;

public function __construct($pos, $name, $num)
{
    $this->position = $pos;
    $this->name = $name;
    $this->number = $num;
}

public function run()
{

}
public function pass()
{

}
public function shoot()
{

}

public function banka()
{

}

}

$jordan = new Baller('center', 'Mike', '23');
$jordan->run();
$jordan->shoot();
$jordan->banka();
$jordan->pass();



/*
 * 2.кружка
ціль - пити з неї

напій
термостійкість
об'єм

наповнити()
підняти()
випити()
поставити()

наповнити()
підняти()
випити()
поставити()*/

class Cap {
    public $drink;
    public $temp;
    public $obj;

    public function __construct($drink, $temp, $obj)
    {

    }

    public function napov()
    {

    }
    public function pidn()
    {

    }
    public function drink()
    {

    }
    public function post()
    {

    }
}

$krushka = new Cap('juce', '90', '1');
$krushka->post();
$krushka->drink();
$krushka->napov();
$krushka->pidn();


/*3.Пилосос

ціль - всмоктувати бруд

атрибути:
фільтер
тип фільтру
колір
довжина шлангу
колеса

поведінка:
включити()
всмоктувати()
виключити()

цикл:
включити()
всмоктувати()
виключити()*/

class Pill
{
    public $filter;
    public $color;

    public function __construct($filter, $color)
    {
        $this->color = $color;
        $this->filter = $filter;

    }

    public function On()
    {

    }

    public function Off()
    {

    }

    public function Pil()
    {

    }
}

$pil = new Pill('water', 'red');



/*
 *
 * 4.Холодильник


ціль - охолоджувати продукти

атрибути:
Температура
Об'єм
морозильна камера

поведінка:
включити()
відкрити()
поставити продукти()
налаштувати температуру()
взяти продукти()
закрити()

цикл:
включити()
відкрити()
поставити продукти()
налаштувати температуру()
закрити()
включити()
відкрити()
взяти продукти()
закрити()
 *
 * */
class Refr
{
    public $temp;
    public $obj;
    public $camera;

    public function __construct($filter, $color)
    {
        $this->color = $color;
        $this->filter = $filter;

    }

    public function On()
    {

    }

    public function Off()
    {

    }

    public function Pil()
    {

    }

}


/*
 *
 * 6.телефон

ціль - зв'язок

атрибути:
модель
колір
4G
Blootuth
провайдер

поведінка:
дзвонити()
прийнятидзвінок()
писатиповідролення()
відправитиповідомлення()
читатиповідомлення()
включити()
виключити()
говорити()
цикл:
включити()
дзвонити()
говорити()
...
виключити()

 *
 * */

class Phone
{
    public $model;
    public $color;

    public function __construct($model, $color)
    {
        $this->color = $color;
        $this->model = $model;

    }

    public function On()
    {

    }

    public function Off()
    {

    }

    public function speak()
    {

    }

}

$nokia = new Phone('A8','red');
$nokia->On();
$nokia->speak();
$nokia->Off();

/*
 *
 * 7.Очі

ціль - дивитися на предмети, зір

атрибути:
якість
колір
дальність
вологість
поведінка:
дивитися()
закрити()
відкрити()
цикл:
відкрити()
дивитися()
закрити()

 *
 * */

class Ochi
{
    public $quality;
    public $color;

    public function __construct($quality, $color)
    {
        $this->color = $color;
        $this->quality = $quality;

    }

    public function open()
    {

    }

    public function close()
    {

    }

    public function see()
    {

    }

}

$lampa = new Ochi('HD', 'blue');
$lampa->open();
$lampa->see();
$lampa->close();

/*
 *
 * 5.Комп'ютер

ціль - користувати програмами

атрибути:
тип
камера
ОС
Пам'ять
Процесор

поведінка:
включити()
виключити()
відкритипрогу()
юзатипрогу()
закритипрогу()

цикл:
включити()
відкритипрогу()
юзатипрогу()
закритипрогу()
виключити()
 *
 * */
class Comp
{
    public $type;
    public $OC;
    public $memory;

    public function __construct($type, $OC, $memor)
    {
        $this->OC = $OC;
        $this->type = $type;
        $this->memory = $memor;

    }

    public function On()
    {

    }

    public function Off()
    {

    }


}


$comp = new Comp('Mac','Mac','20');



/*
 *
 * 8.БД

ціль - відправляти запити до бд

атрибути:
типБД
ім'я
таблиці
кодировка
хост
юзер
пароль

поведінка:
вибрати()
оновити()
вставити()
видалити()
підключитисядоБД()
закритиз'єднання()
цикл:
підключитисядоБД()
вибрати()
оновити()
вставити()
видалити()
закритиз'єднання()


 *
 * */
class DB
{
    public $name;
    public $host;
    public $user;

    public function __construct($name, $host, $user)
    {
        $this->name = $name;
        $this->host = $host;
        $this->user = $user;

    }

    public function select()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }

}

$db = new DB('vasa', 'localhost','vasa');
$db->select();
$db->delete();
$db->update();


/*
 *
 * 9.Ванна

ціль - купати людей

атрибути:
обєм
форма


поведінка:
напускативоду()
зливативоду()
мити()
запускатипіну()
цикл:

напускативоду()
запускатипіну()
мити()
зливативоду()


 *
 * */
class Bath
{
    public $form;
    public $obj;

    public function __construct($form, $obj)
    {
        $this->form = $form;
        $this->obj = $obj;

    }

    public function clean()
    {

    }

    public function pina()
    {

    }

    public function water()
    {

    }

}

$vanna = new Bath('oval', '20');
$vanna->pina();
$vanna->water();
$vanna->clean();


/*
 *
 * 10.Церква

ціль - зустріч з Богом

атрибути:
тип церкви
священники
монахи
вівтар


поведінка:
правитиСлужбу()
причащати()
сповідати()
мирування()
починатиСлужбу()
закінчитиСлужбу()

цикл:
починатиСлужбу()
правитиСлужбу()
сповідати()
причащати()
мирування()
закінчитиСлужбу()



 *
 * */
class Church
{
    public $cef;
    public $monks;

    public function __construct($cef, $monks)
    {
        $this->cef = $cef;
        $this->monks = $monks;

    }

    public function spovid()
    {

    }

    public function prich()
    {

    }

}

$mih = new Church('kat', '2');


?>




