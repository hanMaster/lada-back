<?php

use App\Service;
use Illuminate\Database\Seeder;

class ServicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Абдоминальное исследование органов малого таза', 'code_1c' => 'А04.0.001', 'duration' => 20, 'price' => 500]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Гинекологическое УЗИ  (трансвагинально)', 'code_1c' => 'А04.20.001.001', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Гинекологическое - повторное  посещение (не позднее 1 месяца, при наличии бланка)', 'code_1c' => 'А04.20.001.001п', 'duration' => 20, 'price' => 900]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Мониторинг созревания фолликула (1 исследование)', 'code_1c' => 'А04.20.003', 'duration' => 15, 'price' => 700]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ почек, мочеточников, надпочечников', 'code_1c' => 'А04.22.002', 'duration' => 20, 'price' => 800]);
        Service::insert(['spec_id' => 7, 'name' => 'Узи мочевого пузыря', 'code_1c' => 'А04.28.002.003', 'duration' => 20, 'price' => 500]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Урологический профиль женский: (почки, мочеточники, мочевой пузырь, остаточный объем)', 'code_1c' => 'А04.28.002', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Урологический профиль мужской: (почки, мочеточники, мочевой пузырь, остаточный объем, предстательная железа)', 'code_1c' => 'А04.28.002', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ поджелудочная железа', 'code_1c' => 'A04.15.001', 'duration' => 20, 'price' => 500]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ селезенки', 'code_1c' => 'A04.06.001', 'duration' => 15, 'price' => 500]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Гепатобилиарная система (печень, жел. пузырь, билиарный тракт)', 'code_1c' => 'А04.14.001.003', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Комплексное обследование ОБП', 'code_1c' => 'А04.16.001', 'duration' => 20, 'price' => 1500]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Комплексное обследование ОБП  (без МВС)', 'code_1c' => 'А04.16.001.02', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Молочные железы, аксиллярные  лимфоузлы', 'code_1c' => 'А04.20.002', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Щитовидная железа, лимфоузлы шеи', 'code_1c' => 'А04.22.001', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Предстательная железа, мочевой пузырь (абдоально)', 'code_1c' => 'А04.21.001', 'duration' => 20, 'price' => 800]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Предстательная железа (трансректальное УЗИ)', 'code_1c' => 'А04.21.001.001', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Обследование органов мошонки с ЦДК', 'code_1c' => 'А04.28.003', 'duration' => 20, 'price' => 900]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Обследование мягких тканей одной области', 'code_1c' => 'А04.01.001', 'duration' => 15, 'price' => 500]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ 1 триместр беременности', 'code_1c' => 'A04.30.001.1', 'duration' => 20, 'price' => 1300]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ 1 триместр беременности (2 плода)', 'code_1c' => 'A04.30.001.1', 'duration' => 30, 'price' => 2300]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ 2 триместр беременности', 'code_1c' => 'A04.30.001.2', 'duration' => 30, 'price' => 1500]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ 2 триместр беременности (2 плода)', 'code_1c' => 'A04.30.001.2', 'duration' => 40, 'price' => 2500]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ 3 триместр беременности', 'code_1c' => 'A04.30.001.3', 'duration' => 30, 'price' => 1700]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ 3 триместр беременности (2 плода)', 'code_1c' => 'A04.30.001.3', 'duration' => 40, 'price' => 2700]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Определение срока беременности', 'code_1c' => 'A04.30.001.1', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Допплерометрия', 'code_1c' => 'A04.12.024', 'duration' => 20, 'price' => 500]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Оценка шейки матки (TV)', 'code_1c' => '8.6.к.', 'duration' => 15, 'price' => 500]);
        Service::insert(['spec_id' => 7, 'name' => 'УЗИ Измерение количества околоплодных вод', 'code_1c' => '8.7.к.', 'duration' => 15, 'price' => 500]);
        Service::insert(['spec_id' => 6, 'name' => 'Акушер-гинеколог (гинекология)', 'code_1c' => 'B01.001.001', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 6, 'name' => 'Акушер-гинеколог  (беременность)', 'code_1c' => 'B01.001.004', 'duration' => 20, 'price' => 1500]);
        Service::insert(['spec_id' => 6, 'name' => 'Прием акушера-гинеколога (в течении месяца) Повторное посещение', 'code_1c' => 'B01.001.001', 'duration' => 20, 'price' => 800]);
        Service::insert(['spec_id' => 5, 'name' => 'Маммолог - онколог', 'code_1c' => 'B01.027.001', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 6, 'name' => 'Кольпоскопия', 'code_1c' => 'A03.20.001', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 1, 'name' => 'Терапевт', 'code_1c' => 'B04.047.002', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 2, 'name' => 'Гастроэнтеролог', 'code_1c' => 'B01.004.001', 'duration' => 20, 'price' => 1100]);
        Service::insert(['spec_id' => 8, 'name' => 'Эндокринолог', 'code_1c' => 'B01.058.001', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 3, 'name' => 'Кардиолог', 'code_1c' => 'B01.015.001', 'duration' => 20, 'price' => 1100]);
        Service::insert(['spec_id' => 4, 'name' => 'Сомнолог первичный, повторный прием', 'code_1c' => '', 'duration' => 30, 'price' => 1300]);


        Service::insert(['spec_id' => 8, 'name' => 'Повторное посещение эндокринолога (в течение месяца)', 'code_1c' => 'B01.058.002', 'duration' => 20, 'price' => 1000]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Консультативный прием', 'code_1c' => 'B01.028.001', 'duration' => 15, 'price' => 1200]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Осмотр полости носа и носоглотки с помощью эндоскопа', 'code_1c' => 'А03.08.004.001', 'duration' => 15, 'price' => 700]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Промывание ушей: 1 ухо', 'code_1c' => '', 'duration' => 10, 'price' => 500]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Промывание ушей: 2 уха', 'code_1c' => '', 'duration' => 15, 'price' => 800]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Введение лекарственных веществ в ЛОР-органы', 'code_1c' => 'A11.08.023', 'duration' => 10, 'price' => 180]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Пункция придаточных пазух носа', 'code_1c' => 'А11.08.004', 'duration' => 15, 'price' => 700]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Промывание верхнечелюстной пазухи', 'code_1c' => 'А16.08.023', 'duration' => 15, 'price' => 350]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Вскрытие и дренирование абсцесса, фурункула, карбункула', 'code_1c' => 'A16.08.011', 'duration' => 15, 'price' => 1400]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Механическая остановка носового кровотечения (передняя тампонада носа)', 'code_1c' => 'A16.08.006.001', 'duration' => 15, 'price' => 300]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Продувание ушей по Политцеру', 'code_1c' => 'А16.25.012', 'duration' => 15, 'price' => 650]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Промывание верхнечелюстной пазухи носа с лекарственными веществами методом перемещения', 'code_1c' => 'А11.08.021.001', 'duration' => 15, 'price' => 650]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Промывание лакун далин (аппаратом Тонзилор)', 'code_1c' => 'А16.08.016', 'duration' => 15, 'price' => 1000]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Промывание ушной полости', 'code_1c' => 'А11.25.003', 'duration' => 15, 'price' => 400]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Промывание наружного слухового прохода (аппаратом Тонзилор)', 'code_1c' => 'А11.23.003', 'duration' => 15, 'price' => 600]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Парацентез барабанной перепонки', 'code_1c' => 'А11.23.001', 'duration' => 15, 'price' => 1500]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Удаление инородного тела', 'code_1c' => 'A16.08.007', 'duration' => 15, 'price' => 1000]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Удаление серной пробки, 1 сторона', 'code_1c' => 'A16.25.007', 'duration' => 15, 'price' => 800]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Лечение заболеваний ЛОР-органов с использованием аппарата Тонзилор', 'code_1c' => 'A16.08.007', 'duration' => 15, 'price' => 1200]);
        Service::insert(['spec_id' => 9, 'name' => 'Отоларинголог: Фиброларингоскопия', 'code_1c' => 'А03.08.005', 'duration' => 30, 'price' => 1500]);
    }
}
