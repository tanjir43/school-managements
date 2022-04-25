// //add more functionality here
//
// function get_level_grades(level_id){
//     $('#grade_id').empty();
//     $('#grade_id').append($('<option>').text('Select Grade').attr('value',""));
//
//     $.get("{{ route('grades.index'}}", {
//        level_id:level_id
//     }, function (data){
//         $.each(data, function (index, value){
//             $('#grade_id').append($('<option>').text(value.name).attr("value",value.id));
//         });
//         });
// }
//
// function get_grade_classes(grade_id){
//     $('#class_id').empty();
//     $('#class_id').append($('<option>').text('Select Classes').attr('value',""));
//
//     $.get("{{ route('classes.index'}}", {
//         grade_id:grade_id
//     }, function (data){
//         $.each(data, function (index, value){
//             $('#class_id').append($('<option>').text(value.name).attr("value",value.id));
//         });
//     });
// }
//
// function get_class_subjects(class_id){
//     $('#subject_id').empty();
//     $('#subject_id').append($('<option>').text('Select Subjects').attr('value',""));
//
//     $.get("{{ route('subjects.index'}}", {
//         class_id:class_id
//     }, function (data){
//         $.each(data, function (index, value){
//             $('#subject_id').append($('<option>').text(value.name).attr("value",value.id));
//         });
//     });
// }
//
// function get_shift_times(shift_id){
//     $('#time_id').empty();
//     $('#time_id').append($('<option>').text('Select times').attr('value',""));
//
//     $.get("{{ route('times.index'}}", {
//         shift_id:shift_id
//     }, function (data){
//         $.each(data, function (index, value){
//             $('#time_id').append($('<option>').text(value.start_from + ' to ' + value.end_from).attr("value",value.id));
//         });
//     });
// }
//
