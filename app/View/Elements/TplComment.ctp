<div id="TplComment" class="comment-content">
    <li class="list-group-item comcolor UiCommentBotton" href="javascript:;">
      <div class="col-lg-1">
        <?php $avats = $this->Session->read('Auth.User.Avatar');?>
        <?php if (!empty($avats)): ?>
        <?php
            $avs = end($avats);
            echo $this->Image->resize($avs['url'],35,35);
        ?>
        <?php else: ?>
        <?php echo $this->Html->image('http://dummyimage.com/35x35/bbb/05071f.png&text=avatar'); ?>
        <?php endif; ?>
      </div>
      <div class="col-lg-11 comt">
          <!--<span>
            <div class="btn-group pull-right">
            <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button"><span class="icon-plus-sign-alt"></span></button>
                <ul role="menu" class="dropdown-menu">
                    <li><a href="#"> Modifier </a></li>
                    <li><a href="#"> Supprimer </a></li>
                </ul>
              </div>
          </span>-->
          <span>
            <a href="#" class="usern"><?php echo ucfirst($this->Session->read('Auth.User.User.username')); ?></a>
           {{contentcom}}
          </span>
          <br/>
      </div>
      <abbr class="livetimestamp timeago" title="{{duration}}">{{duration}}</abbr>
      <!--<a href="#" class="linkComment pull-right"><span class="label label-info"><i class="icon-thumbs-up"></i> +Eic </span></a>-->
    </li>
</div>