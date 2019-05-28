@extends('master.dash')
@section('content')
<!-- Header -->
            <div class="header mt-md-5">
              <div class="header-body">
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Pretitle -->
                    <h6 class="header-pretitle">
                      Dashboard
                    </h6>

                    <!-- Title -->
                    <h1 class="header-title">
                      Créditos
                    </h1>

                  </div>
                  <div class="col-auto">
                    
                    <!-- Button -->
                    <a href="#" class="btn btn-primary">
                      New order
                    </a>
                    
                  </div>
                </div> <!-- / .row -->
                <div class="row align-items-center">
                  <div class="col">
                    
                    <!-- Nav -->
                    <ul class="nav nav-tabs nav-overflow header-tabs">
                      <li class="nav-item">
                        <a href="#!" class="nav-link active">
                          All <span class="badge badge-pill badge-soft-secondary">823</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link">
                          Pending <span class="badge badge-pill badge-soft-secondary">24</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link">
                          Processing <span class="badge badge-pill badge-soft-secondary">3</span>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="#!" class="nav-link">
                          Refunded <span class="badge badge-pill badge-soft-secondary">71</span>
                        </a>
                      </li>
                    </ul>

                  </div>
                </div>
              </div>
            </div>

            <!-- Card -->
            <div class="card" data-toggle="lists" data-lists-values='["orders-order", "orders-product", "orders-date", "orders-total", "orders-status", "orders-method"]'>
              <div class="card-header">
                <div class="row align-items-center">
                  <div class="col">

                    <!-- Search -->
                    <form class="row align-items-center">
                      <div class="col-auto pr-0">
                        <span class="fe fe-search text-muted"></span>
                      </div>
                      <div class="col">
                          <input type="search" class="form-control form-control-flush search" placeholder="Search">
                      </div>
                    </form>
                    
                  </div>
                  <div class="col-auto">
                    
                    <!-- Button -->

                    <div class="dropdown">
                      <button class="btn btn-sm btn-white dropdown-toggle" type="button" id="bulkActionDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Bulk action
                      </button>
                      <div class="dropdown-menu dropdown-menu-right" aria-labelledby="bulkActionDropdown">
                        <a class="dropdown-item" href="#!">Action</a>
                        <a class="dropdown-item" href="#!">Another action</a>
                        <a class="dropdown-item" href="#!">Something else here</a>
                      </div>
                    </div>

                  </div>
                </div> <!-- / .row -->
              </div>
              <div class="table-responsive">
                <table class="table table-sm table-nowrap card-table">
                  <thead>
                    <tr>
                      <th>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectAll">
                          <label class="custom-control-label" for="ordersSelectAll">
                            &nbsp;
                          </label>
                        </div>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-order">
                          Order
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-product">
                          Product
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-date">
                          Date
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-total">
                          Total
                        </a>
                      </th>
                      <th>
                        <a href="#" class="text-muted sort" data-sort="orders-status">
                          Status
                        </a>
                      </th>
                      <th colspan="2">
                        <a href="#" class="text-muted sort" data-sort="orders-method">
                          Payment method
                        </a>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="list">
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectOne">
                          <label class="custom-control-label" for="ordersSelectOne">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6520
                      </td>
                      <td class="orders-product">
                        5' x 3' Wall Poster
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-30">07/30/18</time>
                      </td>
                      <td class="orders-total">
                        $55.25
                      </td>
                      <td class="orders-status">
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>
                      </td>
                      <td class="orders-method">
                        Mastercard
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectTwo">
                          <label class="custom-control-label" for="ordersSelectTwo">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6521
                      </td>
                      <td class="orders-product">
                        XL Logo Tee
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-30">07/30/18</time>
                      </td>
                      <td class="orders-total">
                        $14.99
                      </td>
                      <td class="orders-status">
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>
                      </td>
                      <td class="orders-method">
                        Paypal
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectThree">
                          <label class="custom-control-label" for="ordersSelectThree">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6522
                      </td>
                      <td class="orders-product">
                        Flexfit Hat
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-28">07/28/18</time>
                      </td>
                      <td class="orders-total">
                        $25.50
                      </td>
                      <td class="orders-sratus">
                        <div class="badge badge-soft-warning">
                          Processing
                        </div>
                      </td>
                      <td class="orders-method">
                        Visa
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectFour">
                          <label class="custom-control-label" for="ordersSelectFour">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6523
                      </td>
                      <td class="orders-product">
                        Reversible Hoodie
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-27">07/27/18</time>
                      </td>
                      <td class="orders-total">
                        $64.99
                      </td>
                      <td class="orders-status">
                        <div class="badge badge-soft-danger">
                          Cancelled
                        </div>
                      </td>
                      <td class="orders-method">
                        Amex
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectFive">
                          <label class="custom-control-label" for="ordersSelectFive">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6524
                      </td>
                      <td class="orders-product">
                        Geometric Print Shorts
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-25">07/25/18</time>
                      </td>
                      <td class="orders-total">
                        $31.99
                      </td>
                      <td class="orders-status">
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>
                      </td>
                      <td class="orders-method">
                        Paypal
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectOne">
                          <label class="custom-control-label" for="ordersSelectOne">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6525
                      </td>
                      <td class="orders-product">
                        Super Mug
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-22">07/22/18</time>
                      </td>
                      <td class="orders-total">
                        $9.99
                      </td>
                      <td class="orders-status">
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>
                      </td>
                      <td class="orders-method">
                        Mastercard
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectTwo">
                          <label class="custom-control-label" for="ordersSelectTwo">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6526
                      </td>
                      <td class="orders-product">
                        MD Pocket Tee
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-22">07/22/18</time>
                      </td>
                      <td class="orders-total">
                        $19.99
                      </td>
                      <td class="orders-status">
                        <div class="badge badge-soft-warning">
                          Processing
                        </div>
                      </td>
                      <td class="orders-method">
                        Amex
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <div class="custom-control custom-checkbox table-checkbox">
                          <input type="checkbox" class="custom-control-input" name="ordersSelect" id="ordersSelectThree">
                          <label class="custom-control-label" for="ordersSelectThree">
                            &nbsp;
                          </label>
                        </div>
                      </td>
                      <td class="orders-order">
                        #6527
                      </td>
                      <td class="orders-product">
                        Custom Coffee Blend
                      </td>
                      <td class="orders-date">
                        <time datetime="2018-07-21">07/21/18</time>
                      </td>
                      <td class="orders-total">
                        $11.99
                      </td>
                      <td class="orders-sratus">
                        <div class="badge badge-soft-success">
                          Shipped
                        </div>
                      </td>
                      <td class="orders-method">
                        Visa
                      </td>
                      <td class="text-right">
                        <div class="dropdown">
                          <a href="#!" class="dropdown-ellipses dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-boundary="window">
                            <i class="fe fe-more-vertical"></i>
                          </a>
                          <div class="dropdown-menu dropdown-menu-right">
                            <a href="#!" class="dropdown-item">
                              Action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Another action
                            </a>
                            <a href="#!" class="dropdown-item">
                              Something else here
                            </a>
                          </div>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
@endsection