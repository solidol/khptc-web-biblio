<?php
$Me->title = "Каталог электронных книг";
$Me->content = "OLOLO";
$Me->htmlClasses["leftmenu"] = array();
$Me->htmlClasses["leftmenu"]["main"] = "active";


?>

        <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Інвентарний номер</th>
                <th>Автор</th>
                <th>Position</th>
                <th>Редактор</th>

            </tr>
            <tr>
                <th>Інвентарний номер</th>
                <th>Автор</th>
                <th>Position</th>
                <th>Редактор</th>

            </tr>
        </thead>
        
        <tfoot>
            <tr>
                <th>Інвентарний номер</th>
                <th>Автор</th>
                <th>Position</th>
                <th>Редактор</th>

            </tr>
        </tfoot>
        </table>
        <script>
      $(document).ready(function() {
    $('#example').dataTable( {
        "processing": true,
        "serverSide": true,
        "oClasses": {input: "form-control",table: "form-control"},
        //"oLanguage": "ru",
        "ajax": "/ajax/tabler.php"
    } );
} );  
        </script>