<div class="row">
    <div class="col-xs-11">
        <div class="col-xs-8">
            <div class="row">
                <div class="col-xs-5">
                <h2>
                <?=$theBook->author;?>
                </h2>
                </div>
                <div class="col-xs-3">
                    <h3>
                        ISBN: 1526875967253
                    </h3>
                    <!--<a class="form-control" href="<?=$me->siteurl."/index.php/download:".basename(str_replace("\\","/", $theBook->fileurl),".*")?>">-->
                    <a class="form-control" href="<?=$me->siteurl."/".str_replace("\\","/", $theBook->fileurl)?>">
                    Завантажити
                    </a>
                </div>
            </div>
            <h3>
                <?=$theBook->bname;?>
                <?=$theBook->year;?>
            </h3>
            <p>
                <?= iconv('cp1251', 'utf-8', $theBook->annotation);?>
            </p>
        </div>
        <div class="col-xs-3">
            <img width="300" alt="Титульна сторінка" src="<?=$me->siteurl."/".str_replace("\\","/", $theBook->img)?>" class=""/>
        </div>
    </div>
</div>