     <article id="NewPostTpl" class="hidden">
        <div class="row">
              <div class="col-lg-1">
                  <section class="panel">
                      <img src="{{avatar}}" alt=""/>
                  </section>
              </div>
              <div class="col-lg-11">
                 <section class="panel">
                    <div class="panel-body list-group">
                      <h5><strong>{{names}}</strong>
                       <span>
                          <div class="btn-group pull-right">
                          <button data-toggle="dropdown" class="btn btn-success dropdown-toggle btn-xs" type="button">
                          Tâches<span class="caret"></span></button>
                              <ul role="menu" class="dropdown-menu">
                                  <li><a href="#">Modifier</a></li>
                                  <li><a href="#">Abonner</a></li>
                                  <li><a href="#">Cacher </a></li>
                                  <li><a href="#">Supprimer</a></li>
                              </ul>
                          </div>
                      </span>
                      </h5>
                      <p>{{content}}</p>
                      <p></p>
                      <span class="t-info"><i class="icon-time"></i> Il a 20 minutes - <i class="icon-map-marker"></i></span>
                    </div>
                 </section>
              </div>
        </div>
     </article>