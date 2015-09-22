<div class="row">
    <div class="col-xs-13">
        <div class="col-xs-9">
            <h2>
                <?=$theBook->author;?>
            </h2>
            <h3>
                <?=$theBook->bname;?>
                <?=$theBook->year;?>
            </h3>
            <p>
                <?= iconv('cp1251', 'utf-8', $theBook->annotation);?>
            </p>
        </div>
        <div class="col-xs-4">
            
        </div>
    </div>
</div>