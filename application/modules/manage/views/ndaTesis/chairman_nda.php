<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Non-Disclosure Agreement for Chairman</title>
    
</head>
<body>
    <div class="container mt-4">
        <h4 class="text-center">NON-DISCLOSURE AGREEMENT FOR CHAIRMAN</h4>
        <form action="/nda_submission" method="post">
            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" class="form-control" name="date" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Examiner Name</label>
                <input type="text" class="form-control" name="examiner_name" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Faculty/School</label>
                <input type="text" class="form-control" name="faculty" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Candidate Name</label>
                <input type="text" class="form-control" name="candidate_name" required>
            </div>
            
            <div class="mb-3">
                <label class="form-label">Thesis Title</label>
                <input type="text" class="form-control" name="thesis_title" required>
            </div>
            
            <div class="mb-3">
                <p><strong>Confidentiality Agreement:</strong></p>
                <ol>
                    <li>The Confidential Information refers to the whole content of the thesis including any annexure, schedule, tables, data, or proprietary information.</li>
                    <li>The Examiner agrees to receive and hold in confidence the Confidential Information except for any information that is publicly known.</li>
                </ol>
            </div>
            
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="agreement" required>
                <label class="form-check-label">I agree to the terms and conditions of the Non-Disclosure Agreement.</label>
            </div>
            
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>
</body>
</html>
