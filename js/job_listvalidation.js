function listjobs() {
    var company_name = document.list_jobs.company_name;
    var job_name = document.list_jobs.job_name;
    var key_skill = document.list_jobs.key_skill;
    var location = document.list_jobs.location;
    var ctc = document.list_jobs.ctc;
    var exp_required = document.list_jobs.exp_required;
    var jd = document.list_jobs.jd;
    var vaccancies = document.list_jobs.vaccancies;
    var website = document.list_jobs.website;

    if (company_name.length != 0) {
        if (job_name.value.length != 0) {
            if (key_skill.length != 0) {
                if (location.length != 0) {
                    if (ctc.length != 0) {
                        if (exp_required.length != 0) {
                            if (jd.length != 0) {
                                if (vaccancies.length != 0) {
                                    if (website.length != 0) {
                                        return true;
                                    } else {
                                        alert("Website Is Required");
                                        document.list_jobs.website.focus();
                                        return false;
                                    }
                                } else {
                                    alert("Enter Job Description");
                                    document.list_jobs.jd.focus();
                                    return false;
                                }
                            } else {
                                alert("Job experience is Required");
                                document.list_jobs.exp_required.focus();
                                return false;
                            }
                        } else {
                            alert("Company Name is Required");
                            document.list_jobs.company_name.focus();
                            return false;
                        }
                    } else {
                        alert("CTC is Required");
                        document.list_jobs.ctc.focus();
                        return false;
                    }
                } else {
                    alert("Job Location is Required");
                    document.list_jobs.location.focus();
                    return false;
                }
            } else {
                alert("Key Skill is Required");
                document.list_jobs.key_skill.focus();
                return false;
            }
        } else {
            alert("Job Name is Required");
            document.list_jobs.job_name.focus();
            return false;
        }
    } else {
        alert("Company Name is Required");
        document.list_jobs.company_name.focus();
        return false;
    }
}