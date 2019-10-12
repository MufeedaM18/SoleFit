/*
 * TheaterJS, a typing effect mimicking human behavior.
 *
 * Github repository: 
 * https://github.com/Zhouzi/TheaterJS
 *
 */

var theater = theaterJS()

theater
  .on('type:start, erase:start', function () {
    theater.getCurrentActor().$element.classList.add('actor__content--typing')
  })
  .on('type:end, erase:end', function () {
    theater.getCurrentActor().$element.classList.remove('actor__content--typing')
  })
  .on('type:start, erase:start', function () {
    if (theater.getCurrentActor().name === 'vader') {
      document.body.classList.add('dark')
    } else {
      document.body.classList.remove('dark')
    }
  })

theater
  .addActor('vader', { speed: 0.8, accuracy: 0.6 })
  .addActor('luke')
  .addScene('vader:Hi Doctor.', 600)
  .addScene('luke:Hello.', 400)
  .addScene('vader:I am feeling sick after the dinner last night.', 400)
  .addScene('luke:Ohh..', -3, '!!! ', 600, 'man!! ', 600)
  .addScene('luke:That must be due to your food!', 600)
  .addScene('luke: What did you eat yesterday ?', 400)
  .addScene('vader:I ate some fast-food from the hotel at the street!.', 1600)
  .addScene('vader:It was tasty, but I felt stomach pain after some time...', 1000)
  .addScene('luke:Heyy dude! ', 600, 'Are you always like this?', 400)
  .addScene('vader:Yupp!!!.', 600)
  .addScene('vader:Most often I eat these kinds of food.. They are very tasty!!', 1600)
  .addScene('luke:Why don\'t you try homely food. I think you should stop eating fast-food.', 800)
  .addScene('luke:You should eat more vegetables and fruits..!!.', 1600)
  .addScene('vader:But.....', 800)
  .addScene('luke:Bro.. You should not eat for pleasing your tongue..You should eat for your health and body!!', 800)
  .addScene('vader:Okey doctor.I\'ll definitely try.', 1600)
  .addScene('luke:I\'ll prescribe a web-app for you. Visit Sole-fit. That\'ll be useful. ', 800)
  .addScene('vader:Okei doctor. Thank you!!.', 2000)
  .addScene(theater.replay.bind(theater))