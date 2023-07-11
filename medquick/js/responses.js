function getBotResponse(input) {
    //rock paper scissors
    let res = input.toLowerCase();
    if (res == "hello") {
        return "Hello there! <br> Thanks for using MedQuick! Let us know your symptoms and we'll suggest you the right medications.";
    } else if (res == "fever") {
        return ['Try Advil or Tylenol.<br>Any more Symptoms?'];
    } else if (res == "cold") {
        return ['Try Cetrizine or Sinarest.<br>Any more Symptoms?'];
    } else if (res=="cough") {
        return ['Try Paracetemol or Benzo.<br>Any more Symptoms?'];
    } else if(res=="acidity"){
        return ['Try Eno or Panteprazol.<br>Any more Symptoms?'];
    } else if(res=="diarrhea"){
        return ['Try Loperamide or Pepto-Bismal.<br>Any more Symptoms?'];
    } else if(res=="headache"){
        return ['Try Crocin or Paracetemol.<br>Any more Symptoms?'];
    } else if(res=="sore throat"){
        return ['Try Dabur Honitus Cough Syrup.<br>Any more Symptoms? '];
    } else if (res == "goodbye" || res=="bye") {
        return "Bye! Have a good day.";
    } else if (res == "no") {
        return "ThankYou!, It was a pleasure guiding you.";
    } else {
        return "Mention something specific like 'cough','fever','headache' ";
    }
    
    
}