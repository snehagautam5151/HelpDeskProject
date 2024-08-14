@extends('dashboard')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-header">CONTACT LIST </div>

                <div class="card-body">
                    <h1>Contact Information</h1>
                    <p>For general inquiries, please contact us via the following:</p>

                    <!-- List of contacts -->
                    <ul>
                        <li><strong>Zoom Link:</strong> <a href="https://zoom.us/example">Join Zoom Meeting</a></li>
                        <li><strong>Phone Number:</strong> +1 123-456-7890</li>
                    </ul>

                    <h2>Agent Contacts</h2>

                    <!-- Agent contact information -->
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Alexander James</td>
                                <td>agent1@example.com</td>
                                <td>+1 111-222-3333</td>
                            </tr>
                            <tr>
                                <td>Emily Grace</td>
                                <td>agent2@example.com</td>
                                <td>+1 222-333-4444</td>
                            </tr>
                            <tr>
                                <td>Etiffini Ghost</td>
                                <td>agent3@example.com</td>
                                <td>+1 333-444-5555</td>
                            </tr>
                            <tr>
                                <td>Anika Gautam</td>
                                <td>agent4@example.com</td>
                                <td>+1 444-555-6666</td>
                            </tr>
                            <tr>
                                <td>Elly Richard</td>
                                <td>agent5@example.com</td>
                                <td>+1 555-666-7777</td>
                            </tr>
                            <tr>
                                <td>Richard Rogh</td>
                                <td>agent6@example.com</td>
                                <td>+1 666-777-8888</td>
                            </tr>
                            <tr>
                                <td>Sharma Dedis</td>
                                <td>agent7@example.com</td>
                                <td>+1 777-888-9999</td>
                            </tr>
                            <tr>
                                <td>Meena Daort</td>
                                <td>agent8@example.com</td>
                                <td>+1 888-999-0000</td>
                            </tr>
                            <tr>
                                <td>Brauch Jutif</td>
                                <td>agent9@example.com</td>
                                <td>+1 999-000-1111</td>
                            </tr>
                            <tr>
                                <td>William Brown</td>
                                <td>agent10@example.com</td>
                                <td>+1 000-111-2222</td>
                            </tr>
                            <tr>
                                <td>Shami Sn</td>
                                <td>agent11@example.com</td>
                                <td>+1 111-222-3333</td>
                            </tr>
                            <tr>
                                <td>Rose Grace</td>
                                <td>agent12@example.com</td>
                                <td>+1 222-333-4444</td>
                            </tr>
                            <tr>
                                <td>Thomas Brown</td>
                                <td>agent13@example.com</td>
                                <td>+1 333-444-5555</td>
                            </tr>
                            <tr>
                                <td>Olivia Rose</td>
                                <td>agent14@example.com</td>
                                <td>+1 444-555-6666</td>
                            </tr>
                            <tr>
                                <td>Joseph Anderso</td>
                                <td>agent15@example.com</td>
                                <td>+1 555-666-7777</td>
                            </tr>
                            <tr>
                                <td>Ethan Michael</td>
                                <td>agent16@example.com</td>
                                <td>+1 666-777-8888</td>
                            </tr>
                            <tr>
                                <td>Markus Blume</td>
                                <td>agent17@example.com</td>
                                <td>+1 777-888-9999</td>
                            </tr>
                            <tr>
                                <td>Sophia Martinez</td>
                                <td>agent18@example.com</td>
                                <td>+1 888-999-0000</td>
                            </tr>
                            <tr>
                                <td>Isabella Marie</td>
                                <td>agent19@example.com</td>
                                <td>+1 999-000-1111</td>
                            </tr>
                            <!-- Add more agents as needed -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection