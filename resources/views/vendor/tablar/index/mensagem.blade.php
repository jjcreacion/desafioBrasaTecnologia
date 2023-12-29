@php

use App\Models\User;
$profesores = User::all()

@endphp

@extends('tablar::auth.layout')
@section('title', 'enviarmensagem')
@section('content')
    <div class="container container-tight py-4">
        <div class="text-center mb-1 mt-1">
            <a href="" class="navbar-brand navbar-brand-autodark">
                <img src="{{asset(config('tablar.auth_logo.img.path','assets/logo.svg'))}}" height="60"
                     alt=""></a>
        </div>
       
        <div class="card card-md">
            <div class="card-body">
                <h2 class="h2 text-center mb-4">Adicione sua mensagem</h2>
                <form action="{{url('/enviarmensagem')}}" method="post" autocomplete="off" novalidate>
                     @csrf
                     <div class="mb-1">
                        <label class="form-label">Nome do aluno</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" name="aluno"
                               autocomplete="off">
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>

                    <table >
                      <tbody>
                        <tr>
                          <th>
                              <div class="mb-1">
                                <label class="form-label">E-mail</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                       autocomplete="off">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                          </th>
                          <td>
                              <div class="mb-1">
                                <label class="form-label">Whatsapp</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" name="whatsapp"
                                       autocomplete="off">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                          </td>
                        </tr>
                       
                        
                      </tbody>
                    </table>
                    <div class="mb-1">
                        <label class="form-label">Professor</label>
                        
                        <select lass="form-control @error('email') is-invalid @enderror" name="idp">
                            <option value="0">Selecione o professor</option>
                         @foreach ($profesores as $profesor)
                            <option value="{{ $profesor['id'] }}">{{ $profesor['name'] }}</option>
                         @endforeach   
                        </select>       
                        @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        </div>

                    <div class="mb-1">
                                <label class="form-label">Mensagem</label>
                                <textarea cols="20" rows="3" class="form-control @error('email') is-invalid @enderror" name="mensagem"  ></textarea>
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                </div>
                    
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Enviar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </div>
@endsection
