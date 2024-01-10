var  laptopList=[];
var  phoneList=[];


var laptop1 ={
  "id":0,
  "category":"coding",
    "title":"Movie Review Website"
    ,"description":"This is a website where you can login and see the rating and review of the movies.\n" +
      "It was programme by HTML, CSS and PHP, SQL and Boostrap.\nI coded HTMl and CSS for the website's structure and design part" +
      "and PHP to integrate with the SQL database to store the data from the user.\nUser who are registered and sign in allowed to add, modify" +
      " and delete their comments.\nUser and visitor able to see the reviews for the movie in the website."
    ,"skills":"html, css, php, sql, boostrap",
  "images":"assets/movie_Review/Main.png",
  "device":"laptop",
  'carousell':[]
};

// Looping to repeat images up to 13 times
for (var i=1; i <= 13; i++) {
  let imageUrl ="assets/movie_Review/pic"+i+".png";
  laptop1.carousell.push(imageUrl);
}

var laptop2 ={
  "id":1,
  "category":"coding",
  "title":"Ward management App"
  ,"description":"The Java Ward Management App is a comprehensive solution for hospital ward management, built using Java technology. It offers a user-friendly interface for staff to efficiently handle patient-related tasks. The app facilitates the display of a patient list with essential details like bed allocation and medical information. Staff can admit, discharge, or remove patients, updating the database instantly. A key feature includes monitoring the ward's monthly revenue, aiding in financial analysis."
  ,"skills":"JAVA",
  "images":"assets/Renovation/Main.png",
  "device":"laptop",
  'carousell':[]

};
for (var i=1; i <= 6; i++) {
  let imageUrl ="assets/Ward/pic"+i+".png";
  laptop2.carousell.push(imageUrl);
}

var laptop3 ={
  "id":2,
  "category":"coding",
  "title":"SOILearning Portal"
  ,"description":"\n" +
      "The SOI Learning Portal, crafted using HTML, CSS, and Bootstrap, is a responsive platform offering diverse IT-related courses. Its intuitive design features a top navigation dropdown for easy course selection and an autocomplete search box, simplifying content discovery. Utilizing tooltips, users can effortlessly bookmark courses. A carousel showcases featured course cards, enhancing engagement and exploration. The website prioritizes full responsiveness, ensuring seamless interactions across devices. "
  ,"skills":"Html,CSS,Boostrap",
  "images":"assets/Ward/Main.png",
  'carousell':[]

};
for (var i=1; i <= 4; i++) {
  let imageUrl ="assets/SOI CLub/pic"+i+".png";
  laptop3.carousell.push(imageUrl);
}



var laptop4 ={
  "id":0,
  "category":"design",
  "title":"e-commerce website"
  ,"description":"This is an e-commerce website that is apply the principles of web design as well as UI/UX. Understanding user preferences guides the creation of a structured layout and intuitive navigation. The design employs a modern aesthetic, cohesive color scheme, and fitness-oriented visuals.  Content presentation prioritizes clear product information with high-quality images and concise descriptions. Breadcrumb and top navigation bar is applied for easier user navigation."
  ,"skills":"Adobe XD, Photoshop",
  "images":"assets/e-commerce/main.png",
  "device":"laptop",
  'carousell':[]

};


for (var i=1; i <= 11; i++) {
  let imageUrl ="assets/e-commerce/pic"+i+".png";
  laptop4.carousell.push(imageUrl);
}


var design ={
  "title":"collection of design"
  ,"description":"A collection of design that is applied principle of designs such as color contrast, typography, grid system, balance, unity and more"
  ,"skills":"Photoshop, Illustrator",
  "images":"assets/laptop.png",
  "device":"laptop",
  'carousell':['assets/Collection of design/pic1.png','assets/Collection of design/pic2.png','assets/Collection of design/pic3.png','assets/Collection of design/pic4.png','assets/Collection of design/pic5.png']

};
laptopList.push(laptop1);
laptopList.push(laptop2);
laptopList.push(laptop3);
laptopList.push(laptop4);
laptopList.push(design);

var phone1 ={
  "id":0,
  "category":"coding",
  "title":"weather mobile app"
  ,"description":
      "  This mobile app is developed by Flutter and dart that display the weather forcast in London. It displays current temperatures in Kelvin and offers a detailed hourly forecast for every three hours, empowering users to plan their day effectively. Additionally, it provides essential meteorological data like humidity, wind speed, and atmospheric pressure, ensuring a comprehensive overview. Its sleek interface enables easy navigation and refresh feature, allowing users to access localized weather information effortlessly. "
  ,"skills":"Flutter,dart",
  "images":"assets/laptop.png",
  "video":"assets/Weather/video.mp4",
  'carousell':['assets/php.png','assets/flutter.png','assets/boostrap.png']

};


var phone2 ={
  "id":1,
  "category":"coding",
  "title":"Mobile movie rating app",
  "description":"An android app that is developed by Android Studio and JAVA, user are able to record down the Movie that users like by inserting title, year, genre and rating and the movie will be save into the database(SQLite), user also able to modify and delete the movie in the movie list. "
  ,"skills":"Android studio, JAVA",
  "images":"assets/laptop.png",
  "video":"assets/Movie_Rating/video.mp4"


};




var phone3 ={
  "id":2,
  "category":"design",
  "title":"Inflight Eats"
  ,"description":"InFlight Eats redefines in-flight dining with its user-centric mobile app. Travelers can seamlessly customize, review, and make special requests for their meals. The app boasts a sleek UI design featuring a navigational bar for food categories, simplifying meal exploration. Users can modify their meal choices effortlessly, ensuring a personalized dining experience. Additionally, the platform enables travelers to leave reviews on the food they've tried, fostering a community-driven approach to dining preferences. Special requests for dietary needs or preferences are easily accommodated, enhancing user satisfaction. InFlight Eats transforms the inflight dining landscape, offering convenience, personalization, and a platform for culinary feedback, all within an elegantly designed interface"
  ,"skills":"Adobe XD, Photoshop",
  "video":"assets/Flight meal/video.mp4",


};


var phone4 ={
  "id":3,
  "category":"design",
  "title":"BrightSteps"
  ,"description":"BrightSteps is a mobile learning app that is develop for the syndrome down children.The app is designed to improve children's cognitive, motor, communication, and social skills by catering to their specific needs and abilities. Before designing this app, I will do research on how to improve the user experience especially the end user are mostly children. Therefore i came out with a design documentation that defines the end users group as well as their user map journey,side map, mood board, color scheme as well as the font type(comic sans) that is suitable to them."
  ,"skills":"Adobe Xd, Illustrator",
  "images":"assets/laptop.png",
  "video":"assets/Mobile learning/video.mp4"


};
var phone5 ={
  "id":4,
  "category":"design",
  "title":"Mobile portfolio prototype"
  ,"description":"This is an mobile portfolio that is develop by adobe XD, this merges the elegance of UI/UX principles with a dynamic portfolio showcase. This portfolio app delivers an unparalleled user experience, ensuring seamless navigation and captivating visual engagement. The Adobe XD prototype meticulously integrates design principles for optimal grid systems, thoughtfully chosen color schemes, subtle animations, strategic contrast, typography finesse, and clear hierarchy. By focusing on these aspects, the goal of this portfolio is to transcend mere presentation, offering an immersive journey for users exploring showcased projects and skills. Through this meticulous attention to UI/UX details, the aim is to elevate user interaction, enabling a seamless flow between sections while ensuring a visually stimulating experience. The prototype aspires to set new standards in portfolio presentation, marrying aesthetics with functionality, ultimately leaving a lasting impression on users. "
  ,"skills":"Adobe Xd, Illustrator",
  "video":"assets/Mobile Portfolio/video.mp4",


};

phoneList.push(phone1);
phoneList.push(phone2);
phoneList.push(phone3);
phoneList.push(phone4);
phoneList.push(phone5);









