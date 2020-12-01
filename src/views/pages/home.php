<?=$render('header', ['loggedUser'=>$loggedUser]);?>

<section class="container main">
    <?=$render('sidebar', ['activeMenu' => 'home']);?>   
             
        <section class="feed mt-10">
            
            <div class="row">
                <div class="column pr-5">                    
                    
                    <?=$render('feed-editor', ['user'=>$loggedUser]);?> 

                    <?php foreach($feed['posts'] as $feedItem):?>
                        <?=$render('feed-item', [
                            'data' => $feedItem,
                            'loggedUser' => $loggedUser
                        ]);?>                  
                    <?php endforeach;?>

                    <div class="feed-pagination">
                        <?php for($q=0;$q<$feed['pageCount'];$q++): ?>
                            <a class="<?=($q==$feed['currentPage'] ? 'active' : '')?>" href="<?=$base;?>/?page=<?=$q;?>"><?=$q+1;?></a>
                        <?php endfor; ?>
                    </div>                     

                </div>
                <div class="column side pl-5">
                    <div class="box banners">
                        <div class="box-header">
                            <div class="box-header-text">Patrocinios</div>
                            <div class="box-header-buttons">
                                
                            </div>
                        </div>
                        <div class="box-body">
                            <a href=""><img src="https://clubeempreendedorismo.com.br/wp-content/uploads/2019/10/php_do_zero_ao_profissional_b7web.png" /></a>
                            <a href=""><img src="https://jonathasguerra.com.br/blog/wp-content/uploads/2017/01/laravel-covercover.jpg" /></a>
                        </div>
                    </div>
                    <div class="box">
                        <div class="box-body m-10">
                            Criado com ❤️ por B7Web
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </section>
  <?=$render('footer');?>  