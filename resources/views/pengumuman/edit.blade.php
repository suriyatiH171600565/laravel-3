('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <div class=card>
               <div class="card-header">"Pengumuman"</div>
               <div class="card-body">
               	{!! Form::model($pengumuman,['route'=>['pengumuman.update',$pengumuman->id],'method'=>'patch']) !!}
                @include('pengumuman.form')
                {!! Form::close() !!}
               		@endsection
                </form>
               </div>
             </div>
        </div>
    </div>
 </div>
               
@endsection