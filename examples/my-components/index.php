<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Мои компоненты");
?> <p>Многие задачи на сайте можно решить, используя стандартные компоненты. Достаточно бывает изменения шаблона компонента или использование обработки параметров компонента в файле result_modifier.php. </p>
 <p>Файл result_modifier.php, подключается непосредственно перед подключением
 		шаблона компонента. Этот файл получает на вход массив результатов работы компонента и массив параметров вызова компонента. Таким образом, можно
 		изменить массив результатов работы компонента под конкретный шаблон. </p>
 <p>Например, системный компонент полностью подходит для сайта, за исключением того,
 		что он не возвращает какое-то дополнительное поле. В данном случае следует создать файл
 		result_modifier.php в шаблоне компонента и дописать в массив результатов работы компонента дополнительное поле. Могут быть и другие варианты использования этого файла.</p>
 <p>Однако для решения некоторых задач может потребоваться создание собственных компонентов. </p>
 <p>Собственные компоненты могут быть созданы пользователем самостоятельно в соответствии с документацией. Или же они могут быть созданы на основе системных компонентов, путем упрощения или частичного изменения функционала. </p>
 <p>Все компоненты находятся в папке <em>/bitrix/components/</em>. Системные компоненты находятся в папке <em>/bitrix/components/bitrix/</em>. Содержимое этой папки обновляется системой обновлений и не может изменяться пользователями.</p>
 <p> Внимание! Изменение чего-либо в папке системных компонентов <em>/bitrix/components/bitrix/</em> может привести к непредсказуемым последствиям.</p>
 <p> Пользовательские компоненты могут находиться в любых других подпапках папки
 		<em>/bitrix/components/</em>, например в данном демонстрационном проекте специально создана папка <em><strong>/bitrix/components/demo/</strong>, </em>в которой размещаются примеры пользовательских компонентов.</p>
 <p>В качестве примеров пользовательских компонентов представлены следующие:</p>
 <ul>
 		<li>Компонент показа списка новостей</li>
		<li>Компонент показа детальной страницы новостей </li>
		<li>Комплексный компонент новостей <strong>news</strong> </li>
</ul>

 <p>На страницах данного раздела приведены примеры их подключения и использования.</p>


<p>Подключение компонентов выполняется в визуальном редакторе:</p>
<p><img src="/upload/screens/html_editor.png" width="357" height="333" alt="Мои компоненты"></p>


 <p>В коде страницы подключение компонента выполняется следующим образом:</p>
<code>
&lt;?$APPLICATION->IncludeComponent("demo:news.detail", ".default", Array(<br />
&nbsp;&nbsp;&nbsp;"IBLOCK_TYPE"	=>	"news",<br />
&nbsp;&nbsp;&nbsp;"IBLOCK_ID"	=>	"3",<br />
&nbsp;&nbsp;&nbsp;"ELEMENT_ID"	=>	$_REQUEST["ID"],<br />
&nbsp;&nbsp;&nbsp;"IBLOCK_URL"	=>	"news_list.php",<br />
&nbsp;&nbsp;&nbsp;"CACHE_TYPE"	=>	"A",<br />
&nbsp;&nbsp;&nbsp;"CACHE_TIME"	=>	"3600",<br />
&nbsp;&nbsp;&nbsp;"DISPLAY_PANEL"	=>	"N",<br />
&nbsp;&nbsp;&nbsp;"SET_TITLE"	=>	"Y",<br />
&nbsp;&nbsp;&nbsp;"ADD_SECTIONS_CHAIN"	=>	"N",<br />
&nbsp;&nbsp;&nbsp;"DISPLAY_DATE"	=>	"Y",<br />
&nbsp;&nbsp;&nbsp;"DISPLAY_NAME"	=>	"N",<br />
&nbsp;&nbsp;&nbsp;"DISPLAY_PICTURE"	=>	"Y"<br />
&nbsp;)<br />
);?&gt;
<br />
</code>

<p>Обратите внимание: название подпапки папки <i>/bitrix/components/</i> используется для группировки компонентов и при их подключении. Например, все системные компоненты расположены в папке <i>/bitrix/components/<b>bitrix</b></i>.</p>
<p>Соответствующий код подключения системных компонентов выглядит следующим образом:</p>
<code>$APPLICATION->IncludeComponent("bitrix:news.line", ...)</code>

<p>Для пользовательских компонентов из папки <i>/bitrix/components/<b>demo</b></i> подключение выполняется так:</p>

<code>$APPLICATION->IncludeComponent("demo:news.line", ...)</code>

<p>Обратите внимание, создание пользовательского компонента на основе системного имеет определенные минусы: компонент не будет обновляться , а значит не будут исправляться ошибки и добавляться новый функционал. </p>
<p>Подробную информацию по созданию компонентов вы можете найти в <a href="http://www.bitrixsoft.ru/help/source/main/help/ru/developer/general/component20/01.components.php.html">документации для разработчика</a>.</p><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>