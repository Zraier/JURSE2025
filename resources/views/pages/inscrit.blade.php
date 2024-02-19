@extends('layout.blank')
@section('image','assets/img/inscriptions.jpg')
@section('titre','JURSE 2025')
@section('header-content')
<header class="masthead" style="background-image: url('@yield('image')')" >
    
    </header>
@endsection
@section('content')
<main class="mb-4">
    <div class="py-1 mb-5">
        <div class="container">
            <h2>Register</h2>
            @if(session('success'))
            <div style="color: green">{{ session('success') }}</div>
            @endif
            <form method="POST" action="{{ route('inscription') }}" style="width: 50%" >
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name & Last Name</label>
                    <input type="texte" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="Entrez votre nom et prenom">
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">UserName</label>
                    <input type="texte" class="form-control" name="username" id="username" aria-describedby="emailHelp" placeholder="Entrez votre username" required>
                    
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Entrez votre email" required>
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select name="category" class="form-control">
                        <option value="">Select your Category</option>
                        <option value="NS_No_IEEE">Non-Student, Non-IEEE Member</option>
                        <option value="NS_IEEE">Non-Student, IEEE Member</option>
                        <option value="S_No_IEEE">Student, Non-IEEE Member</option>
                        <option value="S_IEEE">Student, IEEE Member</option>
                        <option value="Accompanying_Person">Accompanying Person (participation in all social events)</option>
                    </select>
                    
                    
                  </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
              <br>
              <h3>Registration fees</h3>

              <table class="w-75 mx-auto table mytable mb-5">
                  <thead>
                      <tr>
                          <th class="align-top">Category</th>
                          <th class="text-center">Early Registration<br>31 January - 31 March 2023</th>
                          <th class="text-center">Late Registration<br>1 April - 19 May 2023</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                          <td>Non-Student, Non-IEEE Member</td>
                          <td class="text-center">550€</td>
                          <td class="text-center">600€</td>
                      </tr>
                      <tr>
                          <td>Non-Student, IEEE Member</td>
                          <td class="text-center">500€</td>
                          <td class="text-center">550€</td>
                      </tr>
                      <tr>
                          <td>Student, Non-IEEE Member</td>
                          <td class="text-center">450€</td>
                          <td class="text-center">500€</td>
                      </tr>
                      <tr>
                          <td>Student, IEEE Member</td>
                          <td class="text-center">400€</td>
                          <td class="text-center">450€</td>
                      </tr>
                      <tr>
                          <td>Accompanying Person (participation in all social events)</td>
                          <td class="text-center">100€</td>
                          <td class="text-center">100€</td>
                      </tr>
                  </tbody>
              </table>
  
              <h4 class="mb-4">Registration fees include:</h4>
  
              <div class="ms-1 mb-5">
                  <ul class="ms-3">
                      <li>access to all scientific sessions and the exhibitor's area</li>
                      <li>participation in the technical tutorials</li>
                      <li>conference bag, including proceedings</li>
                      <li>all coffee breaks and lunches during the conference</li>
                      <li>social events</li>
                  </ul>
              </div>
  
              <p><b>At least one of the authors of each accepted paper has to register. Each registration will cover one accepted paper if paid at the student fee, or two accepted papers if paid at the full fee.</b></p>
  
              <h4 class="mb-4">Please note that:</h4>
  
              <div class="ms-1 mb-5">
                  <ul class="ms-3">
                      <li>If you select an <b>IEEE Member</b> registration type, you will be asked to provide your IEEE Member ID.</li>
                      <li>When you reach the final step in the Registration Platform, you will receive an e-mail with all the information you submitted along with a <b>Reference ID</b>.</li>
                      <li>Please include in your <b>payment of the registration fee</b> the name of the participant and Reference ID, so that the payment can be matched to you.</li>
                  </ul>
              </div>
        </div>
    </div>
</main>
@endsection