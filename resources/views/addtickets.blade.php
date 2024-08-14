@extends('dashboard')
@section('content')

<div>
    <div class="wrapperdiv">
        <div class="formcontainer">
            <h1 class="text-center" style="color:blue">Create Ticket</h1>
            <div class="card mt-3">
                <div class="card-body">
                    <form action="{{route('addticket.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Enter Title</label>
                            <input type="text" class="form-control" name="title" placeholder="Enter title"
                                value="{{old('title')}}">
                        </div>

                        <div class="form-group mt-3">
                            <label for="priority">Enter Priority</label>
                            <select class="form-select" name="priority" id="priority"
                                aria-label="Default select example">
                                <option selected>Select Priority</option>
                                <option value="high">High</option>
                                <option value="medium">Medium</option>
                                <option value="low">Low</option>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="departments">Enter Departments</label>
                            <select class="form-select" name="departments" id="department"
                                aria-label="Default select example">
                                <option value="" selected>Select Departments</option>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="categories">Enter Categories</label>
                            <select class="form-select" name="categories" id="category"
                                aria-label="Default select example">
                                <option value="" selected>Select Categories</option>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="agentname"> Support Agent</label>
                            <select class="form-select" name="agentname" id="agentname"
                                aria-label="Default select example">
                                <option value="" selected>Support Agent</option>
                            </select>
                        </div>

                        <div class="form-group mt-3">
                            <label for="attachments">Attachments</label>
                            <input type="file" class="form-control-file" name="attachments">
                        </div>

                        <div class="form-group mt-3">
                            <label for="descriptions">Enter Descriptions</label>
                            <textarea class="form-control" id="descriptions" name="descriptions"
                                placeholder="Enter descriptions" rows="3">{{old('descriptions')}}</textarea>
                        </div>

                        {{-- <div>
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                        </div>   --}}

                        <button type="submit" class="btn btn-primary mb-5 mt-5">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.bootstrap-select {
    width: 100% !important;
}

.dropdown-toggle::after {
    display: none !important;
}
</style>

<script>
let data = [{
        item: 'Hardware',
        subitems: ['Peripheral Device Malfunctions', 'Monitor Issues', 'Keyboard and Mouse Problems',
            'Network Connectivity Hardware Issues', 'Server Hardware Issues', 'Mobile Device Hardware Issues',
            'Hardware Installation and Configuration Issues', 'Desktop and Laptop Hardware Failure'
        ]
    },
    {
        item: 'Software',
        subitems: ['Application Crashes', 'Software Installation Problems', 'Performance Degradation',
            'Compatibility Issues',
            'User Interface (UI) Issues', 'Functionality Errors', 'License and Activation Problems',
            'Data Corruption or Loss',
            'Security Vulnerabilities', 'Integration Issues'
        ]
    },
    {
        item: 'Network',
        subitems: ['Connectivity Problems', 'Hardware Failures', 'Configuration and Setup',
            'Performance Bottlenecks', 'Security Concerns'
        ]
    },
    {
        item: 'Security',
        subitems: ['Security Breaches', 'Compliance Violations']
    },
    {
        item: 'Email',
        subitems: ['Problems with sending or receiving emails', 'Collaboration Tool Problems',
            'Issues with communication and collaboration platforms', 'User Access and Accounts',
            'Password resets, account lockouts', 'Access permissions and user roles adjustments'
        ]
    },
    {
        item: 'Data Management',
        subitems: ['Data Backup and Restore', 'Data Integrity Issues']
    },
    {
        item: 'System Maintenance and Upgrades',
        subitems: ['Scheduled Maintenance', 'Software and Hardware Upgrades']
    },
    {
        item: 'Training and Documentation',
        subitems: ['User Training Requests', 'Documentation Needs']
    },
    {
        item: 'Other',
        subitems: ['General IT Support']
    }
];

let agents = {
    'Peripheral Device Malfunctions': ['Alexander James '],
    'Monitor Issues': ['Alexander James '],
    'Keyboard and Mouse Problems': ['Alexander James '],
    'Network Connectivity Hardware Issues': ['Alexander James '],
    'Server Hardware Issues': ['Alexander James '],
    'Mobile Device Hardware Issues': ['Alexander James '],
    'Hardware Installation and Configuration Issues': ['Alexander James '],
    'Desktop and Laptop Hardware Failure': ['Alexander James '],
    'Application Crashes': ['Emily Grace'],
    'Software Installation Problems': ['Emily Grace'],
    'Performance Degradation': ['Emily Grace'],
    'Compatibility Issues': ['Emily Grace'],
    'User Interface (UI) Issues': ['Emily Grace'],
    'Functionality Errors': ['Emily Grace'],
    'License and Activation Problems': ['Emily Grace'],
    'Data Corruption or Loss': ['Emily Grace'],
    'Security Vulnerabilities': ['Emily Grace'],
    'Integration Issues': ['Emily Grace'],
    'Connectivity Problems': ['Thomas Brown'],
    'Hardware Failures': ['Thomas Brown'],
    'Configuration and Setup': ['Thomas Brown'],
    'Performance Bottlenecks': ['Thomas Brown'],
    'Security Concerns': ['Thomas Brown'],
    'Security Breaches': ['Thomas Brown'],
    'Compliance Violations': ['Olivia Rose'],
    'Problems with sending or receiving emails': ['Olivia Rose'],
    'Collaboration Tool Problems': ['Olivia Rose'],
    'Issues with communication and collaboration platforms': ['Olivia Rose'],
    'User Access and Accounts': ['Olivia Rose'],
    'Password resets, account lockouts': ['Olivia Rose'],
    'Access permissions and user roles adjustments': ['Olivia Rose'],
    'Data Backup and Restore': ['Joseph Anderso'],
    'Data Integrity Issues': ['Joseph Anderso'],
    'Scheduled Maintenance': ['Joseph Anderso'],
    'Software and Hardware Upgrades': ['Isabella Marie'],
    'User Training Requests': ['Isabella Marieo'],
    'Documentation Needs': ['Isabella Marie'],
    'General IT Support': ['Isabella Marie']
};

window.onload = function() {
    var itemSel = document.getElementById("department");
    var subitemSel = document.getElementById("category");
    var agentSel = document.getElementById("agentname");

    for (var x in data) {
        itemSel.options[itemSel.options.length] = new Option(data[x].item, data[x]
            .item); // Use the department name as the value
    }

    itemSel.onchange = function() {
        subitemSel.length = 1; // clear subitems
        agentSel.length = 1; // clear agents
        if (this.selectedIndex < 1) return; // done   
        for (var y in data[this.selectedIndex - 1].subitems) {
            subitemSel.options[subitemSel.options.length] = new Option(data[this.selectedIndex - 1].subitems[y],
                data[this.selectedIndex - 1].subitems[y]);
        }
    }

    subitemSel.onchange = function() {
        agentSel.length = 1; // clear agents
        if (this.selectedIndex < 1) return; // done   
        var agentsList = agents[this.value];
        for (var i in agentsList) {
            agentSel.options[agentSel.options.length] = new Option(agentsList[i], agentsList[i]);
        }
    }
}
</script>
@endsection