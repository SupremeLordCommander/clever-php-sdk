## Documentation for API Endpoints

All URIs are relative to *https://api.clever.com/v3.0*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*DataApi* | [**getContactsForUser**](Api/DataApi.md#getcontactsforuser) | **GET** /users/{id}/mycontacts | 
*DataApi* | [**getCourse**](Api/DataApi.md#getcourse) | **GET** /courses/{id} | 
*DataApi* | [**getCourseForSection**](Api/DataApi.md#getcourseforsection) | **GET** /sections/{id}/course | 
*DataApi* | [**getCourses**](Api/DataApi.md#getcourses) | **GET** /courses | 
*DataApi* | [**getCoursesForResource**](Api/DataApi.md#getcoursesforresource) | **GET** /resources/{id}/courses | 
*DataApi* | [**getCoursesForSchool**](Api/DataApi.md#getcoursesforschool) | **GET** /schools/{id}/courses | 
*DataApi* | [**getDistrict**](Api/DataApi.md#getdistrict) | **GET** /districts/{id} | 
*DataApi* | [**getDistrictForCourse**](Api/DataApi.md#getdistrictforcourse) | **GET** /courses/{id}/district | 
*DataApi* | [**getDistrictForSchool**](Api/DataApi.md#getdistrictforschool) | **GET** /schools/{id}/district | 
*DataApi* | [**getDistrictForSection**](Api/DataApi.md#getdistrictforsection) | **GET** /sections/{id}/district | 
*DataApi* | [**getDistrictForTerm**](Api/DataApi.md#getdistrictforterm) | **GET** /terms/{id}/district | 
*DataApi* | [**getDistrictForUser**](Api/DataApi.md#getdistrictforuser) | **GET** /users/{id}/district | 
*DataApi* | [**getDistricts**](Api/DataApi.md#getdistricts) | **GET** /districts | 
*DataApi* | [**getResource**](Api/DataApi.md#getresource) | **GET** /resources/{id} | 
*DataApi* | [**getResources**](Api/DataApi.md#getresources) | **GET** /resources | 
*DataApi* | [**getResourcesForCourse**](Api/DataApi.md#getresourcesforcourse) | **GET** /courses/{id}/resources | 
*DataApi* | [**getResourcesForSection**](Api/DataApi.md#getresourcesforsection) | **GET** /sections/{id}/resources | 
*DataApi* | [**getResourcesForUser**](Api/DataApi.md#getresourcesforuser) | **GET** /users/{id}/resources | 
*DataApi* | [**getSchool**](Api/DataApi.md#getschool) | **GET** /schools/{id} | 
*DataApi* | [**getSchoolForSection**](Api/DataApi.md#getschoolforsection) | **GET** /sections/{id}/school | 
*DataApi* | [**getSchools**](Api/DataApi.md#getschools) | **GET** /schools | 
*DataApi* | [**getSchoolsForCourse**](Api/DataApi.md#getschoolsforcourse) | **GET** /courses/{id}/schools | 
*DataApi* | [**getSchoolsForTerm**](Api/DataApi.md#getschoolsforterm) | **GET** /terms/{id}/schools | 
*DataApi* | [**getSchoolsForUser**](Api/DataApi.md#getschoolsforuser) | **GET** /users/{id}/schools | 
*DataApi* | [**getSection**](Api/DataApi.md#getsection) | **GET** /sections/{id} | 
*DataApi* | [**getSections**](Api/DataApi.md#getsections) | **GET** /sections | 
*DataApi* | [**getSectionsForCourse**](Api/DataApi.md#getsectionsforcourse) | **GET** /courses/{id}/sections | 
*DataApi* | [**getSectionsForResource**](Api/DataApi.md#getsectionsforresource) | **GET** /resources/{id}/sections | 
*DataApi* | [**getSectionsForSchool**](Api/DataApi.md#getsectionsforschool) | **GET** /schools/{id}/sections | 
*DataApi* | [**getSectionsForTerm**](Api/DataApi.md#getsectionsforterm) | **GET** /terms/{id}/sections | 
*DataApi* | [**getSectionsForUser**](Api/DataApi.md#getsectionsforuser) | **GET** /users/{id}/sections | 
*DataApi* | [**getStudentsForUser**](Api/DataApi.md#getstudentsforuser) | **GET** /users/{id}/mystudents | 
*DataApi* | [**getTeachersForUser**](Api/DataApi.md#getteachersforuser) | **GET** /users/{id}/myteachers | 
*DataApi* | [**getTerm**](Api/DataApi.md#getterm) | **GET** /terms/{id} | 
*DataApi* | [**getTermForSection**](Api/DataApi.md#gettermforsection) | **GET** /sections/{id}/term | 
*DataApi* | [**getTerms**](Api/DataApi.md#getterms) | **GET** /terms | 
*DataApi* | [**getTermsForSchool**](Api/DataApi.md#gettermsforschool) | **GET** /schools/{id}/terms | 
*DataApi* | [**getUser**](Api/DataApi.md#getuser) | **GET** /users/{id} | 
*DataApi* | [**getUsers**](Api/DataApi.md#getusers) | **GET** /users | 
*DataApi* | [**getUsersForResource**](Api/DataApi.md#getusersforresource) | **GET** /resources/{id}/users | 
*DataApi* | [**getUsersForSchool**](Api/DataApi.md#getusersforschool) | **GET** /schools/{id}/users | 
*DataApi* | [**getUsersForSection**](Api/DataApi.md#getusersforsection) | **GET** /sections/{id}/users | 
*EventsApi* | [**getEvent**](Api/EventsApi.md#getevent) | **GET** /events/{id} | 
*EventsApi* | [**getEvents**](Api/EventsApi.md#getevents) | **GET** /events | 

## Documentation For Models

 - [BadRequest](Model/BadRequest.md)
 - [Contact](Model/Contact.md)
 - [Course](Model/Course.md)
 - [CourseObject](Model/CourseObject.md)
 - [CourseResponse](Model/CourseResponse.md)
 - [CoursesCreated](Model/CoursesCreated.md)
 - [CoursesDeleted](Model/CoursesDeleted.md)
 - [CoursesResponse](Model/CoursesResponse.md)
 - [CoursesUpdated](Model/CoursesUpdated.md)
 - [Credentials](Model/Credentials.md)
 - [District](Model/District.md)
 - [DistrictAdmin](Model/DistrictAdmin.md)
 - [DistrictContact](Model/DistrictContact.md)
 - [DistrictObject](Model/DistrictObject.md)
 - [DistrictResponse](Model/DistrictResponse.md)
 - [DistrictsCreated](Model/DistrictsCreated.md)
 - [DistrictsDeleted](Model/DistrictsDeleted.md)
 - [DistrictsResponse](Model/DistrictsResponse.md)
 - [DistrictsUpdated](Model/DistrictsUpdated.md)
 - [Event](Model/Event.md)
 - [EventResponse](Model/EventResponse.md)
 - [EventsResponse](Model/EventsResponse.md)
 - [InternalError](Model/InternalError.md)
 - [Link](Model/Link.md)
 - [Location](Model/Location.md)
 - [Name](Model/Name.md)
 - [NotFound](Model/NotFound.md)
 - [Principal](Model/Principal.md)
 - [Resource](Model/Resource.md)
 - [ResourceObject](Model/ResourceObject.md)
 - [ResourceResponse](Model/ResourceResponse.md)
 - [ResourcesCreated](Model/ResourcesCreated.md)
 - [ResourcesDeleted](Model/ResourcesDeleted.md)
 - [ResourcesResponse](Model/ResourcesResponse.md)
 - [ResourcesUpdated](Model/ResourcesUpdated.md)
 - [Roles](Model/Roles.md)
 - [School](Model/School.md)
 - [SchoolEnrollment](Model/SchoolEnrollment.md)
 - [SchoolObject](Model/SchoolObject.md)
 - [SchoolResponse](Model/SchoolResponse.md)
 - [SchoolsCreated](Model/SchoolsCreated.md)
 - [SchoolsDeleted](Model/SchoolsDeleted.md)
 - [SchoolsResponse](Model/SchoolsResponse.md)
 - [SchoolsUpdated](Model/SchoolsUpdated.md)
 - [Section](Model/Section.md)
 - [SectionObject](Model/SectionObject.md)
 - [SectionResponse](Model/SectionResponse.md)
 - [SectionsCreated](Model/SectionsCreated.md)
 - [SectionsDeleted](Model/SectionsDeleted.md)
 - [SectionsResponse](Model/SectionsResponse.md)
 - [SectionsUpdated](Model/SectionsUpdated.md)
 - [Staff](Model/Staff.md)
 - [Student](Model/Student.md)
 - [StudentRelationship](Model/StudentRelationship.md)
 - [Teacher](Model/Teacher.md)
 - [Term](Model/Term.md)
 - [TermObject](Model/TermObject.md)
 - [TermResponse](Model/TermResponse.md)
 - [TermsCreated](Model/TermsCreated.md)
 - [TermsDeleted](Model/TermsDeleted.md)
 - [TermsResponse](Model/TermsResponse.md)
 - [TermsUpdated](Model/TermsUpdated.md)
 - [User](Model/User.md)
 - [UserObject](Model/UserObject.md)
 - [UserResponse](Model/UserResponse.md)
 - [UsersCreated](Model/UsersCreated.md)
 - [UsersDeleted](Model/UsersDeleted.md)
 - [UsersResponse](Model/UsersResponse.md)
 - [UsersUpdated](Model/UsersUpdated.md)

## Documentation For Authorization


## oauth

- **Type**: OAuth
- **Flow**: accessCode
- **Authorization URL**: https://clever.com/oauth/authorize
- **Scopes**: 
 - ****: 





