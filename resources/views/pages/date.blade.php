@extends('layout.blank')
@section('image','assets/img/date-bg.jpg')
@section('titre','JURSE 2025')
@section('header-content')
<header class="masthead" style="background-image: url('@yield('image')')" >
    
    </header>
@endsection
@section('content')
<main class="mb-4">
    <div class="py-1 mb-5">
        <div class="container">

            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="w-50">Action</th>
                        <th class="w-50">Deadline</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Special Sessions Proposal Deadline</td>
                        <td>30 June 2025</td>
                    </tr>
                    <tr>
                        <td>Open submission Website</td>
                        <td>7 September 2025</td>
                    </tr>
                    <tr>
                        <td>Papers Submission Deadline</td>
                        <td>9 December 2025 (updated)</td>
                    </tr>
                    <tr>
                        <td>Acceptance Notification</td>
                        <td>31 January 2025</td>
                    </tr>
                    <tr>
                        <td>Open Registration Website</td>
                        <td>31 January 2025</td>
                    </tr>
                    <tr>
                        <td>Early Registration Deadline</td>
                        <td>31 March 2025</td>
                    </tr>
                    <tr>
                        <td>Camera-ready Deadline</td>
                        <td>7 April 2025</td>
                    </tr>
                    <tr>
                        <td>Satellite Events</td>
                        <td>16 May 2025</td>
                    </tr>
                    <tr>
                        <td>Main Conference</td>
                        <td>17 - 19 May 2025</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>

</main>
@endsection