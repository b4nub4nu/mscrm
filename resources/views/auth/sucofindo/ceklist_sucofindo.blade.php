@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Formulir CheckList Staging Mesin CRM') }}</div>
                
                <div class="card-body">
                    <!-- <form method="POST" action="tambah"> -->
                    <form method="POST" action="tambah">
                        @csrf
                        <div class="accordion" id="accordionExample">
                        <div class="card">
                                                <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                {{ __('HARDWARE') }}
                                </button>
                            </h2>
                            </div>
                                                
                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-header">{{ __('1. Fisik CRM') }}</div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('1.1. Screen') }}</label>

                            <div class="col-md-2">
                                <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Tidak Cacat') }}</label>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('1.2. Fascia') }}</label>

                            <div class="col-md-2">
                                <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Tidak Cacat') }}</label>
                        </div>  
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('1.3. Card Reader') }}</label>

                            <div class="col-md-2">
                                <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Tidak Cacat') }}</label>
                        </div>     
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('1.4. Keypad') }}</label>

                            <div class="col-md-2">
                                <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Tidak Cacat') }}</label>
                        </div>          
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('1.5. Cover Pinpad') }}</label>

                            <div class="col-md-2">
                                <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Tidak Cacat') }}</label>
                        </div>  
                        <div class="card-header">{{ __('2. Kelengkapan CRM') }}</div>  
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('2.1. Kunci Fascia') }}</label>

                            <div class="col-md-2">
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('A. Kunci Fascia Atas') }}</label>

                            <div class="col-md-2">
                                <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('3') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('B. Kunci Fascia Bawah') }}</label>

                            <div class="col-md-2">
                                <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('3') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('2.2. Kunci Kotak Kartu Tertelan') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('1') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('2.3. Kunci Brankas') }}</label>

                            <div class="col-md-2">
                                
                            </div>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('A. Kunci Tombak') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('3') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('B. Kunci Dummy') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('1') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('2.4. Kunci Kaset') }}</label>

                            <div class="col-md-2">
                            
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('1') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('A. Primary') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('4') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('B. Backup') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('4') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('C. Reject') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('2') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('D. Deposit') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('2') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('E. Retrack') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('1') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('2.6. Tempat Kartu Tertelan') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Tersedia dan dapat difungsikan') }}</label>
                        </div>   
                        </div>
                        </div>
                        <div class="card">
                        <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            {{ __('SOFTWARE') }}
                            </button>
                        </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('3. Operating System') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Windows 7 original license') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('4. Application / Message Format') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('NDC/NDC+,DDC,ISO8583,STandart CEN/CFS SP') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('5. Comm Card') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('TCP/IP') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('6. Processor') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Minimal intel i3 2.4GHz') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('7. Memory') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('4 GB') }}</label>
                        </div> 
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('8. Monitor') }}</label>

                            <div class="col-md-2">
                            <select class="form-control" id="role" name="role">
                                <option>- Select -</option>
                                <option>OK</option>
                                <option>NOT OK</option>
                                </select>
                            
                                    @error('roleuser')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                            <label for="name" class="col-md-4 col-form-label text-md-left">{{ __('Minimal 12" TFT LCD Colour') }}</label>
                        </div> 

                        </div>
                        </div>
                    </div>

                        </div>
                        
                        <!-- <div class="form-group row">
                            <label for="roleuser" class="col-md-4 col-form-label text-md-right">{{ __('Role User') }}</label>

                            <div class="col-md-6">
                            <select class="form-control" id="role" name="role">
                            <option>- Select -</option>
                            <option>BRIIT</option>
                            <option>DEC</option>
                            <option>BG</option>
                            <option>HITACHI</option>
                            <option>OKI</option>
                            <option>SUCOFINDO</option>
                            </select>
                        
                                @error('roleuser')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div> -->

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
