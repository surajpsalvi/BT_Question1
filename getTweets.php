    <?php 
        include "twitteroauth/twitteroauth.php";
        $keyword = $_GET['keyword'];
        $keyword = str_replace(' ', '%20', $keyword);
        $consumer_key = "D4le083X42dero8VS8eAght4o";
        $consumer_secret = "vJSMBti5rNGrT5sUkxKpRuk8yb29hsZfMTEHesdgpaiWHoD5EN";
        $access_token = "292365685-lYOQABjXHDyoPK1khULsMMpNdBDeCCphr6Rwc9o4";
        $access_token_secret = "IXoTMbZRjkCUIagcNOH2M0NE5R1035fYE0PnaPGiTcPu0";

        $twitter = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);

        $tweets = $twitter->get('https://api.twitter.com/1.1/search/tweets.json?q='.$keyword.'&result_type=recent&count=30&include_entities=true');                
        
     foreach ($tweets->statuses as $key => $tweet) 
      { ?>

    <br><h1></h1>

        <div class="row">
            <div class="col-xs-12">
                <h2><img src="<?=$tweet->user->profile_image_url;?>" class="img-circle"/>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tweet->user->name; ?></h2>          
                <a href="#"><span class="glyphicon glyphicon-time"></span> <?=$tweet->created_at; ?></a>
                            <a href="#"><span class="glyphicon glyphicon-map-marker"></span> <?php echo $tweet->user->location; ?></a>
                <p>
                    <?=$tweet->text; ?>
                </p>
                <div class="text-left">
                    <a href="#"><span class="glyphicon glyphicon-plus"></span> <?php echo $tweet->user->listed_count ; ?> </a>
                    <a href="#"><span class="glyphicon glyphicon-comment"></span> <?php echo $tweet->user->followers_count; ?> </a>
                    <a href="#"><span class="glyphicon glyphicon-share"></span> <?php echo $tweet->user->friends_count; ?> </a>
                </div>
            </div>
        </div>    
        <hr />
        
        <?php } ?>  