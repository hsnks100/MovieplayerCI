<html>
    <head>
        <title><?=$page_title?></title>
    </head>
    <body>
        <?php foreach($result as $row):?>
        <h3><?=$row->name?></h3>
        <p><?=$row->age?></p>
        <p><?=$row->email?></p>
        <br />
        <?php endforeach;?>

        <div>  
            <div class="span4"></div>
            <div class="span4">
                <?php echo validation_errors(); ?>
                <form class="form-horizontal" action="/ci/join/join_ok" method="get">
                    <div class="control-group">
                        <label class="control-label" for="nickname">닉네임</label>
                        <div class="controls">
                            <input type="text" id="name" name="name" value="<?php echo set_value('nickname'); ?>"  placeholder="닉네임">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">나이</label>
                        <div class="controls">
                            <input type="text" id="age" name="age" value="<?php echo set_value('email'); ?>" placeholder="나이">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="inputEmail">이메일</label>
                        <div class="controls">
                            <input type="text" id="email" name="email" value="<?php echo set_value('email'); ?>" placeholder="이메일">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label"></label>
                        <div class="controls">
                            <input type="submit" class="btn btn-primary" value="회원가입" />
                        </div>
                    </div>      
                </form>  
            </div>
            <div class="span4"></div>  
        </div>

    </body>
</html>

