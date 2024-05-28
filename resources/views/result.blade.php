@include('header')
<style>
#card {
  background: #fff;
  width: 32%;
  margin: 2em auto;
  padding-bottom: 1em;
  border-radius: 2px;
  -webkit-box-shadow: 0px 3px 13px 0px rgba(0, 0, 0, 0.24);
  -moz-box-shadow: 0px 3px 13px 0px rgba(0, 0, 0, 0.24);
  box-shadow: 0px 3px 13px 0px rgba(0, 0, 0, 0.24);
}

#loan {
  position: relative;
  top: -15px;
  text-align: center;
  font-size: 20px;
  color: #555;
  font-weight: bolder;
}

#states {
  width: 85%;
  margin: 1em auto;
  font-weight: 300;
}

ul {
  padding-bottom: 1em;
  list-style: none;
}

ul li {
  color: #999;
  margin-bottom: 8px;
  padding: 1px 0px 8px 0px;
  border-bottom: 1px solid #f1f1f1;
}

#values li:hover {
  color: #555;
  cursor: pointer;
  text-decoration: underline;
}

#info {
  position: relative;
  float: left;
  margin-left: 0;
  text-align: left;
}

#values {
  position: relative;
  text-align: right;
}

#contactBtn {
  position: relative;
  background: #2ecc71;
  display: block;
  text-align: center;
  margin: auto;
  padding: .5em;
  width: 150px;
  border-radius: 25px;
  font-weight: 500;
  font-family: 'Lato', sans-serif;
  color: #fff;
}
#contactBtn:hover {
  background: #27ae60;
  color: #fff;
}
</style>
<div id='card'>
<h3>Loan Application Results</h3>
@if ($eligibility)
    <p>Congratulations, {{$full_name}}! Your loan application is approved.</p>
    <p>Approved Loan Amount: {{$granted_loan_amount}}</p>
    <p>Repayment Period: {{$repayment_period}} months</p>
    <p>EMI: {{$emi}}</p>
    <p>Risk Score:{{$risk_score}}%</p>
 @else
    <p>Sorry, {{$full_name}}. Your loan application is rejected.</p>
@endif
  </div>
  <a href="{{route('dashboard')}}" id='contactBtn'>
    <i class='fa fa-paper-plane spin'></i>
    Submit Application again
  </a>
</div>
