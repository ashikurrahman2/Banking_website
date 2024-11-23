 @extends('layouts.app')

@section('title', $loanDetails['title'])

@section('content')
<section class="loan-form-section">
    <div class="container">
        <h1>{{ $loanDetails['title'] }}</h1>
        <p>Interest Rate: {{ $loanDetails['rate'] }}</p>

        <form action="{{ url('/apply-loan') }}" method="POST">
            @csrf
            <input type="hidden" name="loan_type" value="{{ $loanType }}">
            <div class="form-group">
                <label for="F_name">Father's name (পিতার নাম):</label>
                <input type="text" id="F_name" name="F_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="M_name">Mother's name (মাতার নাম):</label>
                <input type="text" id="M_name" name="M_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="spouse_name">Spouse's name (স্ত্রীর নাম):</label>
                <input type="text" id="spouse_name" name="spouse_name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="d_birth"> Date Of Birth (জন্ম তারিখ):</label>
                <input type="date" id="d_birth" name="d_birth" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="gender">Gender (লিঙ্গ):</label>
                <input type="text" id="gender" name="gender" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="pass_num">Passport number (পাসপোর্ট নম্বর):</label>
                <input type="number" id="pass_num" name="pass_num" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="country">Country (দেশ):</label>
                <input type="text" id="country" name="country" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="country">Country (দেশ):</label>
                <input type="text" id="country" name="country" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="phone">Mobile No (মোবাইল নম্বর):</label>
                <input type="number" id="phone" name="phone" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="social_phone">Imo/WhatsApp No (ইমু/হোয়াটসঅ্যাপ নম্বর):</label>
                <input type="number" id="social_phone" name="social_phone" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="permanent_address">Permanent Address (স্থায়ী ঠিকানা):</label>
                <input type="text" id="permanent_address" name="permanent_address" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="dittrict">District (জেলা):</label>
                <input type="text" id="dittrict" name="dittrict" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="police_station">Thana (থানা):</label>
                <input type="text" id="police_station" name="police_station" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail (ইমেইল):</label>
                <input type="email" id="email" name="email" class="form-control" required>
            </div>

            {{-- <div class="form-group">
                <label for="amount">Loan Amount</label>
                <input type="number" id="amount" name="amount" class="form-control" required>
            </div> --}}

                <!-- Adding some gap before Bank Details -->
    <div class="form-group mt-4">
        <h5>Bank Details ..........</h5>
    </div>

    <div class="form-group">
        <label for="account_no">Account No (অ্যাকাউন্ট নম্বর):</label>
        <input type="text" id="account_no" name="account_no" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="branch">Branch (শাখা):</label>
        <input type="text" id="branch" name="branch" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="account_holder">Account Holder Name (অ্যাকাউন্ট হোল্ডারের নাম):</label>
        <input type="text" id="account_holder" name="account_holder" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="loan_amount">Loan Amount (ঋণের পরিমাণ):</label>
        <input type="number" id="loan_amount" name="loan_amount" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="repayment_period">Loan Repayment Period (ঋণ পরিশোধের মেয়াদ):</label>
        <input type="text" id="repayment_period" name="repayment_period" class="form-control" required>
    </div>

       <!-- Loan Guarantor Details Section -->
       <div class="form-group mt-4">
        <h5>Loan Guarantor Details ........</h5>
    </div>

    <div class="form-group">
        <label for="guarantor_name">Name (নাম):</label>
        <input type="text" id="guarantor_name" name="guarantor_name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="guarantor_father_name">Father's Name (পিতার নাম):</label>
        <input type="text" id="guarantor_father_name" name="guarantor_father_name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="guarantor_mother_name">Mother's Name (মাতার নাম):</label>
        <input type="text" id="guarantor_mother_name" name="guarantor_mother_name" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="guarantor_nid">NID No (এনআইডি নম্বর):</label>
        <input type="number" id="guarantor_nid" name="guarantor_nid" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="guarantor_thana">Thana (থানা):</label>
        <input type="text" id="guarantor_thana" name="guarantor_thana" class="form-control" required>
    </div>

    <div class="form-group">
        <label for="guarantor_zilla">Zilla (জেলা):</label>
        <input type="text" id="guarantor_zilla" name="guarantor_zilla" class="form-control" required>
    </div>
            <button type="submit" class="btn btn-primary">Submit Application</button>
        </form>
    </div>
</section>
@endsection 



