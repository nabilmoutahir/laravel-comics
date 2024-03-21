<header>

  <div class=" bg-primary text-white">
    <div class="container d-flex justify-content-end">
      <div class=" px-4">
        lorem
      </div>

      <div>
        lorem
      </div>
    </div>
  </div>

  <nav class="container">

      <div class=" py-2 d-flex justify-content-between align-items-center">
          <div>
              <a href="">
                  <img src="/images/dc-logo.png" alt="">
              </a>
          </div>

          <div class=" d-flex ">
              <div class=" px-3">
                  <a href="{{ route('home') }}">HOME</a>
              </div>

              <div class="px-3">CHARACTERS</div>

              <div class="px-3">
                <a href="{{ route('comics') }}">COMICS</a>
              </div>

              <div class="px-3">TV</div>

              <div class="px-3">GAMES</div>

              <div class="px-3">COLLECTIBLES</div>

              <div class="px-3">VIDEOS</div>

              <div class="px-3">FANS</div>

              <div class="px-3">NEWS</div>

              <div>
                <a href="" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                  SHOP
                </a>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
                  <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasRightLabel">
                      ITEMS
                    </h5>

                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>

                  <div class="offcanvas-body">
                    <div class="py-3">
                      <div>ITEM</div>
                      <a href="{{ route('action-comics') }}">action-comics</a>
                    </div>

                    <div class="py-3">
                      <div>ITEM</div>
                      <a href="{{ route('american-vampire') }}">american-vampire</a>
                    </div>
                  </div>
              </div>
          </div>
      </div>

      <div>
          Search
      </div>

  

  </nav>
  
</header>
