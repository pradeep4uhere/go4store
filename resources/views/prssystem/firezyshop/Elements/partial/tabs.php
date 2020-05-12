<section class="tab-area">
<style type="text/css">
#tab-button {
  display: table;
  table-layout: fixed;
  width: 100%;
  margin: 0;
  padding: 0;
  list-style: none;
}
#tab-button li {
  display: table-cell;
  width: 10%;
}
#tab-button li a {
  display: block;
  padding: .9em;
  background: #eee;
  border: 1px solid #ddd;
  text-align: center;
  color: #000;
  text-decoration: none;
}
#tab-button li:not(:first-child) a {
  border-left: none;
}
#tab-button li a:hover,
#tab-button .is-active a {
  border-bottom-color: transparent;
  background: #fff;
}
.tab-contents {
  padding: .5em 2em 1em;
  border: 1px solid #ddd;
}



.tab-button-outer {
  display: none;
}
.tab-contents {
  margin-top: 50px;
}
@media screen and (min-width: 768px) {
  .tab-button-outer {
    position: relative;
    z-index: 2;
    display: block;
  }
  .tab-select-outer {
    display: none;
  }
  .tab-contents {
    position: relative;
    top: -1px;
    margin-top: 0;
  }
}
</style>
 <div class="container">
              <div class="row">
                <div class="col-xs-12 ">
                 <div class="tabs">
  <div class="tab-button-outer">
    <ul id="tab-button">
      <li><a href="#tab01">Description</a></li>
      <li><a href="#tab02">Product Highlights</a></li>
      <li><a href="#tab03">Offers</a></li>
      <li><a href="#tab04">About Brands</a></li>
      <li><a href="#tab05">Return Policy</a></li>
    </ul>
  </div>
  <div class="tab-select-outer">
    <select id="tab-select">
      <option value="#tab01">Description</option>
      <option value="#tab02">Product Highlights</option>
      <option value="#tab03">Offers</option>
      <option value="#tab04">About Brands</option>
      <option value="#tab05">Return Policy</option>
    </select>
  </div>

  <div id="tab01" class="tab-contents">
    <h2>Description</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
  </div>
  <div id="tab02" class="tab-contents">
    <h2>Product Highlights</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
  </div>
  <div id="tab03" class="tab-contents">
    <h2>Offers</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
  </div>
  <div id="tab04" class="tab-contents">
    <h2>About Brands</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
  </div>
  <div id="tab05" class="tab-contents">
    <h2>Return Policy</h2>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quos aliquam consequuntur, esse provident impedit minima porro! Laudantium laboriosam culpa quis fugiat ea, architecto velit ab, deserunt rem quibusdam voluptatum.</p>
  </div>
</div>
                </div>
              </div>
        </div>

</section>
