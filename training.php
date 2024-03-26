<?php
session_start();
require_once "DPA_dbregister.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Training and Awareness</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">DPA Complier</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="datacollection.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Data Collection
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./datacollection.php">Check Compliance</a></li>
                            <li><a class="dropdown-item" href="./datacollection-report.php">Generate Report</a></li>
                            <li><a class="dropdown-item" href="./datacollection-update.php">Update compliance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="incident.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Incident Response
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./incident.php">Check Compliance</a></li>
                            <li><a class="dropdown-item" href="./incident-report.php">Generate Report</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Training and Awareness
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="./training.php">Information Resource</a></li>
                            <li><a class="dropdown-item" href="./training-checklist.php">Check Compliance</a></li>
                            <li><a class="dropdown-item" href="./training-report.php">Generate Report</a></li>
                            <li><a class="dropdown-item" href="./training-update.php">Update compliance</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="datasecurity.php">Data Security</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="communication.php">Subject Communication</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="policy.php">Policy Adherence</a>
                    </li>
                </ul>
                <a class="btn btn-danger" href="./logout.php">Log Out</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="content">
            <h2>Overview of Data Handling Procedure.</h2>
            <h3>Principles of Data Collection.</h3>
                <p>Every data controller or data processor shall
                    ensure that personal data is: </p>
                    <ul>
                        <li>processed in accordance with the right to privacy
of the data subject;</li>
                        <li>processed lawfully, fairly and in a transparent
manner in relation to any data subject; </li>
                        <li>collected for explicit, specified and legitimate
purposes and not further processed in a manner
incompatible with those purposes;</li>
                        <li>adequate, relevant, limited to what is necessary in
relation to the purposes for which it is processed; 
</li>
                        <li>collected only where a valid explanation is
provided whenever information relating to family
or private affairs is required;</li>
                        <li>accurate and, where necessary, kept up to date,
with every reasonable step being taken to ensure
that any inaccurate personal data is erased or
rectified without delay; </li>
                        <li>kept in a form which identifies the data subjects
for no longer than is necessary for the purposes
which it was collected;</li>
<li>not transferred outside Kenya, unless there is proof
of adequate data protection safeguards or consent
from the data subject.</li>
                    </ul>
                    <p>A data controller or data processor shall collect
personal data directly from the data subject. Personal data may also be collected indirectly where:</p>
<ul>
    <li>the data is contained in a public record;</li>
    <li>the data subject has deliberately made the data
public;</li>
    <li>the data subject has consented to the collection
from another source;</li>
    <li>the data subject has an incapacity, the guardian
appointed has consented to the collection from
another source; </li>
    <li>the collection from another source would not
prejudice the interests of the data subject;</li>
    <li>collection of data from another source is
necessary -</li>
</ul>
<ol>
    <li>for the prevention, detection, investigation,
prosecution and punishment of crime; </li>
    <li>for the enforcement of a law which imposes a
pecuniary penalty;</li>
    <li>for the protection of the interests of the data
subject or another person. 
</li>
</ol>
<h3>Principles of Data Processing.</h3>
<p>A data controller or data processor shall not
process personal data, unless </p> 
<ul>
    <li>the data subject consents to the processing for one
or more specified purposes;</li>
<li>the processing is necessary:</li>
</ul><ol>
    <li>for the performance of a contract to which
the data subject is a party or in order to take
steps at the request of the data subject before
entering into a contract;</li>
<li>for compliance with any legal obligation to
which the controller is subject;</li>
<li>in order to protect the vital interests of the
data subject or another natural person; </li>
<li>for the performance of a task carried out in
the public interest or in the exercise of
official authority vested in the controller; </li>
<li>the performance of any task carried out by a
public authority; 
</li>
<li>for the exercise, by any person in the public
interest, of any other functions of a public
nature; </li>
<li>for the legitimate interests pursued by the
data controller or data processor by a third
party to whom the data is disclosed, except
if the processing is unwarranted in any
particular case having regard to the harm
and prejudice to the rights and freedoms or
legitimate interests of the data subject;</li>
<li>for the purpose of historical, statistical,
journalistic, literature and art or scientific
research.</li>
</ol>
<h3>Personal Data Relating to a Child.</h3>
<p>Every c.L.,ta controller or data processor shall
not process personal data :.elating to a child unless:</p>
<ul>
    <li>consent is given by the child's parent or guardian;</li>
    <li>the processing is in such a manner that protects
and advances the rights and best interests of the
child.</li>
</ul><p>A data controller or data processor shall
incorporate appropriate mechanisms for age verification
and consent in order to process personal data of a child. A data controller or data processor that exclusively
provides counselling or child protection services to a child
may not be required to obtain parental consent.</p>
<h3>Data Processing Restrictions</h3>
<p>A data controller or data processor shall, at the
request of a data subject, restrict the processing of personal
data where:</p>
<ul>
    <li>accuracy of the personal data is contested by the
data subject, for a period enabling the data
controller to verify the accuracy of the data;</li>
    <li>personal data is no longer required for the purpose
of the processing, unless the data controller or data
processor requires the personal data for the
establishment, exercise or defence of a legal claim;</li>
    <li>processing is unlawful and the data subject
opposes the erasure of the personal data and
requests the restriction of their use instead;</li>
    <li>data subject has objected to the processing,
pending verification as to whether the legitimate
interests of the data controller or data processor
overrides those of the data subject.</li>
</ul><p>Personal data restriction can only be overlooked in the event where it is to exercise or
defence of a legal claim or to protect the
rights of another person or for reasons of public
interest. In this scenario, the data controller shall inform the data subject
before withdrawing the restriction on processing of
the personal data. The data controller or data processor shall
implement mechanisms to ensure that time limits
established for the rectification, erasure or restriction of
processing of personal data, or for a periodic review of the
need for the storage of the personal data, is observed. <br>A data subject has a right to object to the
processing of their personal data, unless the data controller
or data processor demonstrates compelling legitimate
interest for the processing which overrides the data
subject's interests, or for the establishment, exercise or
defence of a legal claim. 
</p>
<h3>Personal Data Retention.</h3>
<p>A data controller or data processor shall retain
personal data only as long as may be reasonably necessary
to satisfy the purpose for which it is processed unless the
retention is:</p>
<ul>
    <li>required or authorised by law;</li>
    <li>reasonably necessary for a lawful purpose;</li>
    <li>authorised or consented by the data subject;</li>
    <li>for historical, statistical, journalistic literature and
art or research purposes.</li>
</ul>
<h3>Processing of Sensitive Personal Data</h3>
<p>The Data Commissioner may prescribe categories of personal data which may be classified as
sensitive personal data. All the principles under personal data processing also apply to the Sensitive personal data. Sensitive personal
data of a data subject may be processed where:</p>
<ul>
    <li>the processing is carried out in the course of
legitimate activities with appropriate safeguards by
a foundation, association or any other not-forprofit body with a political, philosophical,
religious or trade union aim and on condition
that the processing relates solely to the members of
the body or to persons who have regular
contact with it in connection with its purposes
and the personal data is not disclosed outside that
body without the consent of the data subject.</li>
<li>the processing relates to personal data which is
manifestly made public by the data subject</li>
<li>processing is necessary for:</li>
<ol>
    <li>the establishment, exercise or defence of a
legal claim;</li>
<li>the purpose of carrying out the obligations
and exercising specific rights of the controller
or of the data subject;</li>
<li>protecting the vital interests of the data
subject or another person where the data
subject is physically or legally incapable of
giving consent.</li>
</ol>
</ul>
<h3>Personal Data relating to Health.</h3>
<p>Personal data relating to the health of a data
subject may only be processed:</p>
<ul>
    <li>by or under the responsibility of a health care
provider;</li>
<li> by a person subject to the obligation of
professional secrecy under any law.</li>
</ul><p>Health related personal data should only be processed if:</p>
<ul>
    <li>necessary for reasons of public interest in the
area of public health;</li>
<li>carried out by another person who in the
circumstances owes a duty of confidentiality under
any law.</li>
</ul>
<p>Transfer of Personal Data Outside Kenya.A data controller or data processor may transfer
personal data to another country only where:</p>
<ul>
    <li>the data controller or data processor has given
proof to the Data Commissioner on the appropriate
safeguards with respect to the security and
protection of the personal data;</li>
<li>the data controller or data processor has given
proof to the Data Commissioner of the appropriate
safeguards with respect to the security and
protection of personal data, and the appropriate
safeguards including jurisdictions with
commensurate data protection laws;</li>
<li>the transfer is necessary:</li><ol>
    <li>for the performance of a contract between the
data subject and the data controller or data
processor or implementation of precontractual measures taken at the data
subject's request;</li>
<li>for the conclusion or performance of a
contract concluded in the interest of the data
subject between the controller and another
person;</li>
<li>for any matter of public interest;</li>
<li>for the establishment, exercise or defence of a
legal claim;</li>
<li>in order to protect the vital interests of the
data subject or of other persons, where the
data subject is physically or legally incapable
of giving consent;</li>
<li>for the purpose of compelling legitimate
interests pursued by the data controller or
data processor which are not overridden by
the interests, rights and freedoms of the data
subjects.</li>
</ol>
</ul><p>The processing of sensitive personal data out of
Kenya shall only be effected upon obtaining consent of a
data subject and on obtaining confirmation of appropriate
safeguards</p>

        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</html>