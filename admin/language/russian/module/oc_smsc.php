<?php

// Heading
$_['heading_title'] = 'SMSC';
$_['text_module'] = 'Модули';

// Tabs
$_['oc_smsc_tab_connection'] = 'Подключение';
$_['oc_smsc_tab_member'] = 'Администратор';
$_['oc_smsc_tab_customer'] = 'Покупатель';

// Text
$_['oc_smsc_text_login'] = 'Логин';
$_['oc_smsc_text_password'] = 'Пароль';
$_['oc_smsc_text_signature'] = 'Имя отправителя';
$_['oc_smsc_text_maxsms'] = 'Длина сообщения';
$_['oc_smsc_text_sms'] = 'SMS';
$_['oc_smsc_text_debug']= 'Отладка';
$_['oc_smsc_text_admin_new_customer'] = 'Зарегистрирован новый покупатель';
$_['oc_smsc_text_admin_new_order'] = 'Осуществлен новый заказ';
$_['oc_smsc_text_admin_new_email'] = 'Поступило новое письмо с контактной формы магазина';
$_['oc_smsc_text_telephone'] = 'Номер телефона';
$_['oc_smsc_text_customer_new_order'] = 'Осуществлен новый заказ';
$_['oc_smsc_text_customer_new_order_status'] = 'Изменение статуса заказа';
$_['oc_smsc_text_customer_new_register'] = 'Успешное завершение регистрации';
$_['oc_smsc_text_notify_by_sms'] = 'Уведомлять по SMS';
$_['oc_smsc_text_notify'] = 'Тексты уведомлений';
$_['oc_smsc_label_admin_new_order'] = 'при новом заказе';
$_['oc_smsc_label_customer_new_order'] = 'при новом заказе';
$_['oc_smsc_label_customer_new_status'] = 'при изменении статуса заказа';

// Messages
$_['oc_smsc_message_customer_new_order_status'] = 'Статус заказа изменен';

// Other
$_['oc_smsc_text_connection_tab_description'] =
'Укажите логин и пароль для подключения к шлюзу SMSC и имя отправителя.<br />
Обратите внимание, что имя отправителя должно быть предварительно<br />
зарегистрировано в личном кабинете. Для добавления нового имени<br />
необходимо на странице настроек справа от поля выбора имени отправителя<br />
нажать ссылку "имена".';

$_['oc_smsc_text_macros_description'] =
'В тексте SMS-уведомлений возможно указание специальных макросов, которые<br />
будут заменены на соответствующие значения при отправке сообщений.<br /><br />
Для уведомлений можно использовать следующие макросы:
<ul>
<li>{ORDER_NUM} - номер заказа
<li>{ORDER_SUM} - итоговая стоимость заказа (всего)
<li>{ORDER_STATUS} - статус заказа
<li>{COMMENT} - комментарии покупателя к заказу
<li>{FIRST_NAME} - имя покупателя
<li>{LAST_NAME} - фамилия покупателя
<li>{CR_PHONE} - номер телефона покупателя
<li>{CR_CITY} - город доставки заказа
<li>{CR_ADDR} - адрес доставки заказа
<li>{GOODS_LIST} - список товаров в формате "Товар:Модель:Количество:Итого"
</ul>';