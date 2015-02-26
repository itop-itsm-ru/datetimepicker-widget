datetimepicker-widget-for-itop
==============================
Удобный виджет выбора даты и времени для [Combodo iTop](http://combodo.com/itop)


Этот модуль заменяет стандартный виджет выбора даты и времени на вот [этот](https://github.com/xdan/datetimepicker):
![Date And Time Picker Widger for Combodo iTop](datetimepicker-widget/doc/datetimepicker-widget.png)

### Установка
Устанавливаем, как и любой другой модуль в iTop:
 1. Перекладываем папку *datatimepicker-widget* в *itop/extensions/*.
 2. Разрешаем редактирование config-файла iTop *itop/conf/production/config-itop.php*.
 3. Переходим в браузере http://my-itop/setup и выбираем "Upgrade an existing iTop instance".
 4. На предпоследнем шаге ставим галочку напротив названия модуля и устанавливаем.
 5. Готово.

### Настройка
После установки модуля и config-файле добавятся параметры виджета, доступные для редактирования.
```
'datetimepicker-widget' => array (
  'default' => array(
    'lang' => 'ru',
    'dayOfWeekStart' => 1,
    'step' => 30
  )
),
```
Возможные значения параметров смотри в [документации к плагину](http://xdsoft.net/jqplugins/datetimepicker/).

### Ограничения
- Формат может быть только такой: `Y-m-d H:i`.

### Дальнейшие планы
- Добавить разные настройки для разных полей.

### Ссылки
- [iTop ITSM & CMDB по-русски](http://community.itop-itsm.ru)
- [Сайт Combodo iTop](http://www.combodo.com/itop)
- [DateTimePicker jQuery plugin](http://xdsoft.net/jqplugins/datetimepicker/)
