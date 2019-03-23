  <form role="search" method="get" action="<?php echo home_url('/');?>">
              <input type="search" class="form-control" value="<?php get_search_query();?>" name="s" />
              <div class="input-submit">
                <button class="button-primary" type="submit">Buscar</button>
              </div>
          </form>
