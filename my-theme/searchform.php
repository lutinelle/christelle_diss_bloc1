
<form class="row m-4 justify-content-center " action="<?php esc_url(home_url('/')) ?>">
    <div class="col-md-6 primary rounded-4 ">
        <div class="row justify-content-center px-3 py-5">

        <div class="col ">
            <input type="search" class="form-control" name="s" id="search" aria-label="search"  value="<?php get_search_query()?>">
        </div>
        <div class="col-5 col-sm-4">
            <button type="submit" class="btn text-light">Rechercher</button>
        </div>
        </div>
  </div>
</form>