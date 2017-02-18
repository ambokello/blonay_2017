$(document).ready(function() {

	$("select.form-control").blur(function(){
		$p.questionnaire.score = QScore();
		var fullNames = $p.questionnaire.customFields.name;
		var scoreArray = $p.questionnaire.score
		var boldCreative = scoreArray[0];
		var selfDisciplined = scoreArray[1];
		var empathic = scoreArray[2];
		
		var data = {
		    labels: ["Bold Creative", "Self Disciplined", "Empathic"],
		    datasets: [
		        {
		            borderWidth: 3,
		            borderColor: "#262f72",
		            pointBorderColor: "#262f72",
		            pointBackgroundColor: "#fff",
		            pointBorderWidth: 2,
		            pointHoverRadius: 5,
		            pointHoverBackgroundColor: "#262f72",
		            pointHoverBorderColor: "#fff",
		            pointHoverBorderWidth: 2,
		            data: scoreArray
		        }
		    ]
		};

		var ctx = $("#radar");
		var myRadarChart = new Chart(ctx, {
		    type: 'radar',
		    data: data,
		    options: {
		        responsive: true,
		        legend: {
		            display: false
		        },
		        tooltips: {
		            mode: 'single',
		            backgroundColor: '#fff',
		            bodyColor: '#888',
		            titleColor: '#888'
		        },
		        animation: {
		            duration: 1500,
		            easing: 'easeInOutQuart'
		        },
		        scale: {
		            ticks: {
		                beginAtZero: true,
		                display: false
		            },
					beforeFit: function (scale) {
						if (scale.chart.config.data.labels.length === 3) {
							var pointLabelFontSize = Chart.helpers.getValueOrDefault(scale.options.pointLabels.fontSize, Chart.defaults.global.defaultFontSize);
							scale.height *= (1.5 / 1.5)
							scale.height -= pointLabelFontSize;
						}
					},
					afterFit: function (scale) {
						if (scale.chart.config.data.labels.length === 3) {
							var pointLabelFontSize = Chart.helpers.getValueOrDefault(scale.options.pointLabels.fontSize, Chart.defaults.global.defaultFontSize);
							scale.height += pointLabelFontSize;
							scale.height /= (1.5 / 1.5);
						}
					},            
		        },
		        maintainAspectRatio: false,
		        elements: {
		            line: {
		                tension: 0,
		            }
		        }
		    }
		});

    });
});

/*
* Function QScore
* return an array of sums (Bold, Empath and Self Disciplined)
*/
function QScore() {
    //Define empty array totalScores
    totalScores = new Array();

    //Define category sum for bold, empathic and self discipline
    var totalCategoryBoldCreative = 0;
    var totalCategorySelfDisciplined = 0;
    var totalCategoryEmpathic = 0;

    //Get all the available keys
    var keys = Object.keys($p.questionnaire.customFields);

    for (idx in keys) {
        switch (keys[idx]) {
            case 'workspace_is':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Tidy. Everything has its place':
                    totalCategorySelfDisciplined += 7;

                    break;
                    case 'b) Messy. You keep a lot of clutter around you':
                    totalCategoryBoldCreative += 7;
                    break;

                    case 'c) Somewhat messy. but you know which piles to look in when you need to find things':
                    totalCategoryBoldCreative += 4;
                    break;

                    case 'd) Fairly tidy. You can find most things you need':
                    totalCategorySelfDisciplined += 4;
                    break;
                }
            break;

            case 'group_idea':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Do a lot of the talking but encourage people to give their ideas':
                    totalCategoryEmpathic += 4;
                    break;

                    case 'b) Just blurt out your ideas as soon as they come into your head':
                    totalCategoryBoldCreative += 7;
                    break;

                    case 'c) Speak up when you have an especially good idea':
                    totalCategoryBoldCreative += 4;
                    break;

                    case 'd) Help others to express their views rarely expressing your own':
                    totalCategoryEmpathic += 7;
                    break;
                }
            break;

            case 'group_outing':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Join in with most conversations when you know about the topic':
                    totalCategoryBoldCreative += 4;
                    break;

                    case 'b) Often start new conversations':
                    totalCategoryBoldCreative += 7;
                    break;

                    case 'c) Try and change conversations to bring other people into the discussion':
                    totalCategoryEmpathic += 4;
                    break;

                    case 'd) Spend most of the time listening to conversations':
                    totalCategoryEmpathic += 7;
                    break;
                }
            break;

            case 'how_shopping':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) You write a complete list before you go and stick to it always going up and down the aisles in exactly the same order':
                    totalCategorySelfDisciplined += 7;
                    break;

                    case 'b) You list a few of the things you want and add to them as you go following a regular pattern around the supermarket':
                    totalCategorySelfDisciplined += 4;
                    break;

                    case 'c) You have a regular pattern but are often diverted by new things or special offers that catch your eye':
                    totalCategoryBoldCreative += 4;
                    break;

                    case 'd) You vary the way you go round the supermarket depending on what you feel like buying':
                    totalCategoryBoldCreative += 7;
                    break;
                }
            break;

            case 'handle_restaurant':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Drink it regardless; everyone makes mistakes':
                    totalCategoryEmpathic += 7;
                    break;

                    case 'b) If the waiter asks if everything is ok tell him that you were given the wrong drink':
                    totalCategoryEmpathic += 7;
                    break;

                    case 'c) Try to get the waiters attention as he walks past and explain the situation':
                    totalCategoryBoldCreative += 4;
                    break;

                    case 'd) Get out of your seat and find the waiter to explain that you have the wrong drink':
                    totalCategoryBoldCreative += 7;
                    break;
                }
            break;

            case 'decision_coworkers':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Make your decision based only on the facts presented to you':
                    totalCategorySelfDisciplined += 7;
                    break;

                    case 'b) Focus on minimising the negative impact on your colleagues':
                    totalCategoryEmpathic += 4;
                    break;

                    case 'c) Make the best decision for the organisation but talk to those you impacted negatively':
                    totalCategorySelfDisciplined += 4;
                    break;

                    case 'd) Make the decision that comes closest to pleasing everyone':
                    totalCategoryEmpathic += 7;
                    break;
                }
            break;

            case 'project_move':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) You make a comprehensive plan that you tend to follow fairly precisely':
                    totalCategorySelfDisciplined += 7;
                    break;

                    case 'b) You jump straight in and start coming up with ideas':
                    totalCategoryBoldCreative += 7;
                    break;

                    case 'c) You roughly plan what your are going to do but you don’t usually stick to it':
                    totalCategoryBoldCreative += 4;
                    break;

                    case 'd) You write down each stage you need to complete and tick them off as you go':
                    totalCategorySelfDisciplined += 4;
                    break;
                }
            break;

            case 'callcenter_reaction':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Answer all the questions bluntly and try to make the call as short as possible':
                    totalCategorySelfDisciplined += 4;
                    break;

                    case 'b) Politely answer all the questions and try and build some rapport with the agent':
                    totalCategoryEmpathic += 4;
                    break;

                    case 'c) Give detailed answers to the questions and try and get to know the agent':
                    totalCategoryEmpathic += 7;
                    break;

                    case 'd) Refuse to answer any questions that you do not think are necessary and hang up if the agent persists':
                    totalCategorySelfDisciplined += 7;
                    break;
                }
            break;

            case 'employee_response':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Let them have what they want life can be complicated sometimes':
                    totalCategoryEmpathic += 7;
                    break;

                    case 'b) Ask them to take the time off as holiday':
                    totalCategorySelfDisciplined += 4;
                    break;

                    case 'c) Give them the time off without pay and ask them to submit documentation proving where they are':
                    totalCategorySelfDisciplined += 7;
                    break;

                    case 'd) Let them take it as holiday but offer the chance to make up the hours in overtime':
                    totalCategoryEmpathic += 4;
                    break;
                }
            break;

            case 'navigation_days':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Take a look at the map before you leave to get the route in your head':
                    totalCategorySelfDisciplined += 4;
                    break;

                    case 'b) Pull out the map and get the exact directions':
                    totalCategorySelfDisciplined += 7;
                    break;

                    case 'c) Rely on your gut feel; you can always ask for directions':
                    totalCategoryBoldCreative += 7;
                    break;

                    case 'd) Make sure you have the map with you but only glance at it':
                    totalCategoryBoldCreative += 4;
                    break;
                }
            break;

            case 'dating_dislike':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Try to find out what your friend finds attractive about their date':
                    totalCategoryEmpathic += 7;
                    break;

                    case 'b) Tell them what you think the next time you speak to them':
                    totalCategoryBoldCreative += 7;
                    break;

                    case 'c) Find a suitable moment to express your thoughts':
                    totalCategoryBoldCreative += 4;
                    break;

                    case 'd) See how the relationship goes and be ready to express your views if things turn a bit sour':
                    totalCategoryEmpathic += 4;
                    break;
                }
            break;

            case 'prefer_holiday':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Plan most things in advance':
                    totalCategorySelfDisciplined += 7;
                    break;

                    case 'b)Plan a rough itinerary in advance leaving most time free':
                    totalCategorySelfDisciplined += 4;
                    break;

                    case 'c) Look at one or two things in advance but leave most decisions until you are there':
                    totalCategoryBoldCreative += 4;
                    break;

                    case 'd) You rarely plan just book at the last minute and go with the flow':
                    totalCategoryBoldCreative += 7;
                    break;
                }
            break;

            case 'work_comfort':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Talking to people about their issues but also expressing your views':
                    totalCategoryEmpathic += 4;
                    break;

                    case 'b) Promoting your own ideas for solutions to problems':
                    totalCategoryBoldCreative += 7;
                    break;

                    case 'c) Listening patiently to other people’s problems and needs':
                    totalCategoryEmpathic += 7;
                    break;

                    case 'd) Coming up with your own ideas but being prepared to change them after taking on the views of others':
                    totalCategoryBoldCreative += 4;
                    break;
                }
            break;

            case 'disagree_refdecision':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Get on with the game the referee’s decision is final':
                    totalCategoryEmpathic += 7;
                    break;

                    case 'b) Go over to the referee next time there is a break in the play and discuss his decision with him':
                    totalCategoryEmpathic += 4;
                    break;

                    case 'c) Shout at the referee as loudly as you can to let him know you think he got it wrong':
                    totalCategoryBoldCreative += 7;
                    break;

                    case 'd) Tell the team captain that you thought the decision was wrong and leave it with them':
                    totalCategoryBoldCreative += 4;
                    break;
                }
            break;

            case 'sit_office':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) In the quietest part of the office':
                    totalCategorySelfDisciplined += 7;
                    break;

                    case 'b) With your work friends but near an aisle so lots of people walk past you':
                    totalCategoryEmpathic += 4;
                    break;

                    case 'c) With your work friends but in the corner so you can have some privacy':
                    totalCategorySelfDisciplined += 4;
                    break;

                    case 'd) Where you can see everyone and be in the middle of the action':
                    totalCategoryEmpathic += 7;
                    break;
                }
            break;

            case 'decide_twocars':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) List the features that are most important to you and decide which car fits best':
                    totalCategorySelfDisciplined += 7;
                    break;

                    case 'b) List the features that are most important to both you and your family and decide which car fits best':
                    totalCategorySelfDisciplined += 4;
                    break;

                    case 'c) Work out your preference instinctively and then get your familys view':
                    totalCategoryEmpathic += 4;
                    break;

                    case 'd) Ask your family to decide and go with whatever they say':
                    totalCategoryEmpathic += 7;
                    break;
                }
            break;

            case 'difficult_decision':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Being decisive and sticking to your decision':
                    totalCategorySelfDisciplined += 7;
                    break;

                    case 'b) Being as fair as possible':
                    totalCategoryEmpathic += 4;
                    break;

                    case 'c) Arriving logically at the best choice':
                    totalCategorySelfDisciplined += 4;
                    break;

                    case 'd) Getting the approval and agreement of others':
                    totalCategoryEmpathic += 7;
                    break;
                }
            break;

            case 'track_finances':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) You usually have a fairly good idea of what your account balance is':
                    totalCategorySelfDisciplined += 4;
                    break;

                    case 'b) You do not really pay much attention to your balance outside your monthly statements':
                    totalCategoryBoldCreative += 4;
                    break;

                    case 'c) You always know your exact account balance':
                    totalCategorySelfDisciplined += 7;
                    break;

                    case 'd) You do not really know your account balance':
                    totalCategoryBoldCreative += 7;
                    break;
                }
            break;

            case 'team_crisis':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Making speeches to encourage the rest of the team':
                    totalCategoryBoldCreative += 4;
                    break;

                    case 'b) Actively taking steps to find a solution yourself':
                    totalCategoryBoldCreative += 7;
                    break;

                    case 'c) Identifying who in the team is best placed to do what':
                    totalCategoryEmpathic += 4;
                    break;

                    case 'd) Getting alongside members of the team who are most adversely affected':
                    totalCategoryEmpathic += 7;
                    break;
                }
            break;

            case 'furniture_store':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) Scan the instructions although you do not always follow them exactly':
                    totalCategoryBoldCreative += 4;
                    break;

                    case 'b) Check that all the components are there and that you have the tools you will need before you start':
                    totalCategorySelfDisciplined += 4;
                    break;

                    case 'c) Read through the instructions carefully first and then follow them step by step':
                    totalCategorySelfDisciplined += 7;
                    break;

                    case 'd) Leap in only referring to the instructions if you get stuck':
                    totalCategoryBoldCreative += 7;
                    break;
                }
            break;

            case 'meet_new_people':
                switch($p.questionnaire.customFields[keys[idx]]) {
                    case 'a) You just go out and have fun':
                    totalCategorySelfDisciplined += 4;
                    break;

                    case 'b) You stick with the people you have met before':
                    totalCategorySelfDisciplined += 7;
                    break;

                    case 'c) You spend your time thinking about how to keep the conversation going':
                    totalCategoryEmpathic += 4;
                    break;

                    case 'd) You aim to mingle with as many new people as possible':
                    totalCategoryEmpathic += 7;
                    break;
                }
            break;
        }
    }

    totalScores.push(totalCategoryBoldCreative, totalCategorySelfDisciplined, totalCategoryEmpathic);

    return totalScores;
}