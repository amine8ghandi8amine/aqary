        <div class="quick-search" style=" 
                                       padding: 20px 40px;
    margin-top: 0px;
    background: rgba(25, 14, 14, 0.4);
                                         ">
             
                      <div class="row">
                        <form role="form">

                        	<div class="col-md-6 col-sm-6 col-xs-6">
	                            <div class="form-group">
	                              <label for="cities">المدينة</label>

	                              {!! Form::select('cities', $cities , null ,['id' => 'cities', 'class' => 'form-control', 'style' => 'width: 100%;']) !!}

	                            </div>


	                            <div class="form-group">
	                              <label for="location">الموقع</label>


	                              {!! Form::select('positions', [] , null ,['id' => 'positions', 'class' => 'form-control', 'style' => 'width: 100%;']) !!}


	                            </div>

                        	</div>


                        	<div class="col-md-6 col-sm-6 col-xs-6">

	                            <div class="form-group">
	                              <label for="type">  نوع العقار </label>
                                {!! Form::select('cat', $realEstateTypes, null, ['placeholder' => 'Pick', 'id' => 'realEstateTypes', 'class' => 'form-control']) !!}

	                                       
	                              </select>
	                            </div>




	                            <div class="form-group">
	                              <label for="status">  للايجار ام للبيع </label>

                                {!! Form::select('cat_business', $businessTypes, null, ['placeholder' => 'Pick', 'id' => 'businessTypes', 'class' => 'form-control']) !!}

	                            </div>


                        	</div>


                          <!-- break -->
                          <div class="col-md-6 col-sm-6 col-xs-6">

                            <div class="form-group">
                              <label for="minprice">اكبر سعر</label>
                              {!! Form::number('maxPrice', null,['class' => 'form-control', 'placeholder' => 'ادخل الحد الأقصى او اتركه فارغا']) !!}
                            </div>
                          </div>
                          <!-- break -->
                          <div class="col-md-6 col-sm-6 col-xs-6">

                            <div class="form-group">
                              <label for="maxprice">  اقل سعر  </label>
                              {!! Form::number('minPrice', null,['class' => 'form-control', 'placeholder' => 'ادخل الحد الادنى او اتركه فارغا']) !!}
                            </div>
                          </div>
  <div class="col-md-12 col-sm-12" style="direction: ltr;"><button type="submit" class="btn btn-block btn-info ">ابحــــــــــــث<span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></div>

                        </form>
                      </div>
                     
        </div>