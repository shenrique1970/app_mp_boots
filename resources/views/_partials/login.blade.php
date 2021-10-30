
<!-- MODAL PARA LOGIN -->
<div id="login" class="modal">
    <div class="modal-content">
        <div class="card-body">
            <form method="POST" action="">
                @csrf
                <div class="row">
                    <div class="col s12">
                        <h4 class="center-align teal-text text-darken-4">Login</h4>
                    </div>
                    <div class="input-field col s12">
                        <i class="teal-text material-icons prefix">alternate_email</i>
                        <input id="email" name="email" type="email" class="validate">
                        
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="input-field col s12">
                        <i class="teal-text material-icons prefix">vpn_key</i>
                        <input id="senha" name="senha" type="password" class="validate">
                        <label for="senha">{{__('Password') }}</label>
                        @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                    <div class="input-field col s12 right-align">
                        <button class="btn teal waves-effect waves-light" type="reset" name="reset">
                            Limpar
                        </button>
                        <button class="btn  teal darken-3 waves-effect waves-light" type="submit" name="action">
                            Entrar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>