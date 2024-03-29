	.file	"typemaps.x86_64.s"

/* map_module_count: START */
	.section	.rodata.map_module_count,"a",@progbits
	.type	map_module_count, @object
	.p2align	2
	.global	map_module_count
map_module_count:
	.size	map_module_count, 4
	.long	23
/* map_module_count: END */

/* java_type_count: START */
	.section	.rodata.java_type_count,"a",@progbits
	.type	java_type_count, @object
	.p2align	2
	.global	java_type_count
java_type_count:
	.size	java_type_count, 4
	.long	863
/* java_type_count: END */

/* java_name_width: START */
	.section	.rodata.java_name_width,"a",@progbits
	.type	java_name_width, @object
	.p2align	2
	.global	java_name_width
java_name_width:
	.size	java_name_width, 4
	.long	102
/* java_name_width: END */

	.include	"typemaps.shared.inc"
	.include	"typemaps.x86_64-managed.inc"

/* Managed to Java map: START */
	.section	.data.rel.map_modules,"aw",@progbits
	.type	map_modules, @object
	.p2align	4
	.global	map_modules
map_modules:
	/* module_uuid: 0ecd8110-999c-4be3-a2bf-bcd039b82fa7 */
	.byte	0x10, 0x81, 0xcd, 0x0e, 0x9c, 0x99, 0xe3, 0x4b, 0xa2, 0xbf, 0xbc, 0xd0, 0x39, 0xb8, 0x2f, 0xa7
	/* entry_count */
	.long	54
	/* duplicate_count */
	.long	2
	/* map */
	.quad	module0_managed_to_java
	/* duplicate_map */
	.quad	module0_managed_to_java_duplicates
	/* assembly_name: Xamarin.Android.Support.Compat */
	.quad	.L.map_aname.0
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 4eb9621a-6fd5-46d3-ab55-b3d74c4bf501 */
	.byte	0x1a, 0x62, 0xb9, 0x4e, 0xd5, 0x6f, 0xd3, 0x46, 0xab, 0x55, 0xb3, 0xd7, 0x4c, 0x4b, 0xf5, 0x01
	/* entry_count */
	.long	1
	/* duplicate_count */
	.long	0
	/* map */
	.quad	module1_managed_to_java
	/* duplicate_map */
	.quad	0
	/* assembly_name: Xamarin.Android.Support.v7.CardView */
	.quad	.L.map_aname.1
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 72fdf52c-05ef-4747-9d0c-a8b4acc6f6d6 */
	.byte	0x2c, 0xf5, 0xfd, 0x72, 0xef, 0x05, 0x47, 0x47, 0x9d, 0x0c, 0xa8, 0xb4, 0xac, 0xc6, 0xf6, 0xd6
	/* entry_count */
	.long	1
	/* duplicate_count */
	.long	0
	/* map */
	.quad	module2_managed_to_java
	/* duplicate_map */
	.quad	0
	/* assembly_name: Xamarin.Android.Support.Core.UI */
	.quad	.L.map_aname.2
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: b8133439-8cc7-4079-a9a3-fd61f42c670b */
	.byte	0x39, 0x34, 0x13, 0xb8, 0xc7, 0x8c, 0x79, 0x40, 0xa9, 0xa3, 0xfd, 0x61, 0xf4, 0x2c, 0x67, 0x0b
	/* entry_count */
	.long	5
	/* duplicate_count */
	.long	1
	/* map */
	.quad	module3_managed_to_java
	/* duplicate_map */
	.quad	module3_managed_to_java_duplicates
	/* assembly_name: Xamarin.Android.Support.Loader */
	.quad	.L.map_aname.3
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 32b4b459-42cc-4605-9fc2-fed9498db3aa */
	.byte	0x59, 0xb4, 0xb4, 0x32, 0xcc, 0x42, 0x05, 0x46, 0x9f, 0xc2, 0xfe, 0xd9, 0x49, 0x8d, 0xb3, 0xaa
	/* entry_count */
	.long	43
	/* duplicate_count */
	.long	14
	/* map */
	.quad	module4_managed_to_java
	/* duplicate_map */
	.quad	module4_managed_to_java_duplicates
	/* assembly_name: Xamarin.Android.Support.v7.RecyclerView */
	.quad	.L.map_aname.4
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 31db1662-4c33-4046-898a-5db89a1bc20c */
	.byte	0x62, 0x16, 0xdb, 0x31, 0x33, 0x4c, 0x46, 0x40, 0x89, 0x8a, 0x5d, 0xb8, 0x9a, 0x1b, 0xc2, 0x0c
	/* entry_count */
	.long	1
	/* duplicate_count */
	.long	0
	/* map */
	.quad	module5_managed_to_java
	/* duplicate_map */
	.quad	0
	/* assembly_name: RzaolyScan.Android */
	.quad	.L.map_aname.5
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: d0906070-920c-4ebd-a390-173ac972b67c */
	.byte	0x70, 0x60, 0x90, 0xd0, 0x0c, 0x92, 0xbd, 0x4e, 0xa3, 0x90, 0x17, 0x3a, 0xc9, 0x72, 0xb6, 0x7c
	/* entry_count */
	.long	2
	/* duplicate_count */
	.long	1
	/* map */
	.quad	module6_managed_to_java
	/* duplicate_map */
	.quad	module6_managed_to_java_duplicates
	/* assembly_name: Xamarin.Android.Arch.Lifecycle.LiveData.Core */
	.quad	.L.map_aname.6
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 3a086b8d-3e19-416c-8c11-6dc2587d73a6 */
	.byte	0x8d, 0x6b, 0x08, 0x3a, 0x19, 0x3e, 0x6c, 0x41, 0x8c, 0x11, 0x6d, 0xc2, 0x58, 0x7d, 0x73, 0xa6
	/* entry_count */
	.long	3
	/* duplicate_count */
	.long	1
	/* map */
	.quad	module7_managed_to_java
	/* duplicate_map */
	.quad	module7_managed_to_java_duplicates
	/* assembly_name: Xamarin.Android.Support.CoordinaterLayout */
	.quad	.L.map_aname.7
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: a6b8c590-4495-4515-ad60-741936a74c49 */
	.byte	0x90, 0xc5, 0xb8, 0xa6, 0x95, 0x44, 0x15, 0x45, 0xad, 0x60, 0x74, 0x19, 0x36, 0xa7, 0x4c, 0x49
	/* entry_count */
	.long	2
	/* duplicate_count */
	.long	0
	/* map */
	.quad	module8_managed_to_java
	/* duplicate_map */
	.quad	0
	/* assembly_name: FormsViewGroup */
	.quad	.L.map_aname.8
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 47b357a4-5739-4eed-a5b4-a0d0c92b42ef */
	.byte	0xa4, 0x57, 0xb3, 0x47, 0x39, 0x57, 0xed, 0x4e, 0xa5, 0xb4, 0xa0, 0xd0, 0xc9, 0x2b, 0x42, 0xef
	/* entry_count */
	.long	190
	/* duplicate_count */
	.long	0
	/* map */
	.quad	module9_managed_to_java
	/* duplicate_map */
	.quad	0
	/* assembly_name: Xamarin.Forms.Platform.Android */
	.quad	.L.map_aname.9
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 1e7d2cab-3b82-4bbb-8b77-7b79d38536d0 */
	.byte	0xab, 0x2c, 0x7d, 0x1e, 0x82, 0x3b, 0xbb, 0x4b, 0x8b, 0x77, 0x7b, 0x79, 0xd3, 0x85, 0x36, 0xd0
	/* entry_count */
	.long	2
	/* duplicate_count */
	.long	0
	/* map */
	.quad	module10_managed_to_java
	/* duplicate_map */
	.quad	0
	/* assembly_name: ZXing.Net.Mobile.Forms.Android */
	.quad	.L.map_aname.10
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: a04bfab0-aee9-41bf-bf12-e5874bf68c8d */
	.byte	0xb0, 0xfa, 0x4b, 0xa0, 0xe9, 0xae, 0xbf, 0x41, 0xbf, 0x12, 0xe5, 0x87, 0x4b, 0xf6, 0x8c, 0x8d
	/* entry_count */
	.long	10
	/* duplicate_count */
	.long	4
	/* map */
	.quad	module11_managed_to_java
	/* duplicate_map */
	.quad	module11_managed_to_java_duplicates
	/* assembly_name: Xamarin.Android.Support.Fragment */
	.quad	.L.map_aname.11
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 7b97cbb1-2ea7-4697-a911-cefe25cc5303 */
	.byte	0xb1, 0xcb, 0x97, 0x7b, 0xa7, 0x2e, 0x97, 0x46, 0xa9, 0x11, 0xce, 0xfe, 0x25, 0xcc, 0x53, 0x03
	/* entry_count */
	.long	4
	/* duplicate_count */
	.long	0
	/* map */
	.quad	module12_managed_to_java
	/* duplicate_map */
	.quad	0
	/* assembly_name: Xamarin.Android.Support.SwipeRefreshLayout */
	.quad	.L.map_aname.12
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 1e7825b4-57b2-48bd-9772-4ed86b8ecd8d */
	.byte	0xb4, 0x25, 0x78, 0x1e, 0xb2, 0x57, 0xbd, 0x48, 0x97, 0x72, 0x4e, 0xd8, 0x6b, 0x8e, 0xcd, 0x8d
	/* entry_count */
	.long	6
	/* duplicate_count */
	.long	0
	/* map */
	.quad	module13_managed_to_java
	/* duplicate_map */
	.quad	0
	/* assembly_name: ZXingNetMobile */
	.quad	.L.map_aname.13
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 1edf8abb-cb2d-460a-8504-46046e7a952e */
	.byte	0xbb, 0x8a, 0xdf, 0x1e, 0x2d, 0xcb, 0x0a, 0x46, 0x85, 0x04, 0x46, 0x04, 0x6e, 0x7a, 0x95, 0x2e
	/* entry_count */
	.long	7
	/* duplicate_count */
	.long	1
	/* map */
	.quad	module14_managed_to_java
	/* duplicate_map */
	.quad	module14_managed_to_java_duplicates
	/* assembly_name: Xamarin.Android.Support.ViewPager */
	.quad	.L.map_aname.14
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 7e619ebc-2d6c-4082-94de-f653b5166460 */
	.byte	0xbc, 0x9e, 0x61, 0x7e, 0x6c, 0x2d, 0x82, 0x40, 0x94, 0xde, 0xf6, 0x53, 0xb5, 0x16, 0x64, 0x60
	/* entry_count */
	.long	4
	/* duplicate_count */
	.long	0
	/* map */
	.quad	module15_managed_to_java
	/* duplicate_map */
	.quad	0
	/* assembly_name: Xamarin.Android.Support.DrawerLayout */
	.quad	.L.map_aname.15
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 6ab406c2-7f04-4088-b058-2ed5df66c238 */
	.byte	0xc2, 0x06, 0xb4, 0x6a, 0x04, 0x7f, 0x88, 0x40, 0xb0, 0x58, 0x2e, 0xd5, 0xdf, 0x66, 0xc2, 0x38
	/* entry_count */
	.long	4
	/* duplicate_count */
	.long	1
	/* map */
	.quad	module16_managed_to_java
	/* duplicate_map */
	.quad	module16_managed_to_java_duplicates
	/* assembly_name: Xamarin.Android.Arch.Lifecycle.Common */
	.quad	.L.map_aname.16
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 6ea653cb-4c29-4b18-9f33-71ab568d3776 */
	.byte	0xcb, 0x53, 0xa6, 0x6e, 0x29, 0x4c, 0x18, 0x4b, 0x9f, 0x33, 0x71, 0xab, 0x56, 0x8d, 0x37, 0x76
	/* entry_count */
	.long	453
	/* duplicate_count */
	.long	68
	/* map */
	.quad	module17_managed_to_java
	/* duplicate_map */
	.quad	module17_managed_to_java_duplicates
	/* assembly_name: Mono.Android */
	.quad	.L.map_aname.17
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 429db7d7-07f6-4d34-bab7-a3f050e89b5e */
	.byte	0xd7, 0xb7, 0x9d, 0x42, 0xf6, 0x07, 0x34, 0x4d, 0xba, 0xb7, 0xa3, 0xf0, 0x50, 0xe8, 0x9b, 0x5e
	/* entry_count */
	.long	1
	/* duplicate_count */
	.long	0
	/* map */
	.quad	module18_managed_to_java
	/* duplicate_map */
	.quad	0
	/* assembly_name: Xamarin.Essentials */
	.quad	.L.map_aname.18
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: e9c672d9-3779-48ab-995b-111a2c8c8426 */
	.byte	0xd9, 0x72, 0xc6, 0xe9, 0x79, 0x37, 0xab, 0x48, 0x99, 0x5b, 0x11, 0x1a, 0x2c, 0x8c, 0x84, 0x26
	/* entry_count */
	.long	21
	/* duplicate_count */
	.long	1
	/* map */
	.quad	module19_managed_to_java
	/* duplicate_map */
	.quad	module19_managed_to_java_duplicates
	/* assembly_name: Xamarin.Android.Support.Design */
	.quad	.L.map_aname.19
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: e4048fd9-f99b-4e68-ab20-4fc1fb513337 */
	.byte	0xd9, 0x8f, 0x04, 0xe4, 0x9b, 0xf9, 0x68, 0x4e, 0xab, 0x20, 0x4f, 0xc1, 0xfb, 0x51, 0x33, 0x37
	/* entry_count */
	.long	2
	/* duplicate_count */
	.long	0
	/* map */
	.quad	module20_managed_to_java
	/* duplicate_map */
	.quad	0
	/* assembly_name: Xamarin.Android.Arch.Lifecycle.ViewModel */
	.quad	.L.map_aname.20
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 579ca4de-4ae7-4a9e-b9d3-89063f391718 */
	.byte	0xde, 0xa4, 0x9c, 0x57, 0xe7, 0x4a, 0x9e, 0x4a, 0xb9, 0xd3, 0x89, 0x06, 0x3f, 0x39, 0x17, 0x18
	/* entry_count */
	.long	1
	/* duplicate_count */
	.long	0
	/* map */
	.quad	module21_managed_to_java
	/* duplicate_map */
	.quad	0
	/* assembly_name: FastAndroidCamera */
	.quad	.L.map_aname.21
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	/* module_uuid: 6bf7d5eb-f973-4b1d-a19d-5e9b339ee698 */
	.byte	0xeb, 0xd5, 0xf7, 0x6b, 0x73, 0xf9, 0x1d, 0x4b, 0xa1, 0x9d, 0x5e, 0x9b, 0x33, 0x9e, 0xe6, 0x98
	/* entry_count */
	.long	46
	/* duplicate_count */
	.long	4
	/* map */
	.quad	module22_managed_to_java
	/* duplicate_map */
	.quad	module22_managed_to_java_duplicates
	/* assembly_name: Xamarin.Android.Support.v7.AppCompat */
	.quad	.L.map_aname.22
	/* image */
	.quad	0
	/* java_name_width */
	.long	0
	/* java_map */
	.zero	4
	.quad	0

	.size	map_modules, 1656
/* Managed to Java map: END */

/* Java to managed map: START */
	.section	.rodata.map_java,"a",@progbits
	.type	map_java, @object
	.p2align	4
	.global	map_java
map_java:
	/* #0 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554948
	/* java_name */
	.ascii	"android/animation/Animator"
	.zero	76

	/* #1 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554950
	/* java_name */
	.ascii	"android/animation/Animator$AnimatorListener"
	.zero	59

	/* #2 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554952
	/* java_name */
	.ascii	"android/animation/Animator$AnimatorPauseListener"
	.zero	54

	/* #3 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554962
	/* java_name */
	.ascii	"android/animation/AnimatorListenerAdapter"
	.zero	61

	/* #4 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554965
	/* java_name */
	.ascii	"android/animation/TimeInterpolator"
	.zero	68

	/* #5 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554954
	/* java_name */
	.ascii	"android/animation/ValueAnimator"
	.zero	71

	/* #6 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554956
	/* java_name */
	.ascii	"android/animation/ValueAnimator$AnimatorUpdateListener"
	.zero	48

	/* #7 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554968
	/* java_name */
	.ascii	"android/app/ActionBar"
	.zero	81

	/* #8 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554970
	/* java_name */
	.ascii	"android/app/ActionBar$Tab"
	.zero	77

	/* #9 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554973
	/* java_name */
	.ascii	"android/app/ActionBar$TabListener"
	.zero	69

	/* #10 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554975
	/* java_name */
	.ascii	"android/app/Activity"
	.zero	82

	/* #11 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554976
	/* java_name */
	.ascii	"android/app/AlertDialog"
	.zero	79

	/* #12 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554977
	/* java_name */
	.ascii	"android/app/AlertDialog$Builder"
	.zero	71

	/* #13 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554978
	/* java_name */
	.ascii	"android/app/Application"
	.zero	79

	/* #14 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554980
	/* java_name */
	.ascii	"android/app/Application$ActivityLifecycleCallbacks"
	.zero	52

	/* #15 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554981
	/* java_name */
	.ascii	"android/app/DatePickerDialog"
	.zero	74

	/* #16 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554984
	/* java_name */
	.ascii	"android/app/DatePickerDialog$OnDateSetListener"
	.zero	56

	/* #17 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554986
	/* java_name */
	.ascii	"android/app/Dialog"
	.zero	84

	/* #18 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555002
	/* java_name */
	.ascii	"android/app/FragmentTransaction"
	.zero	71

	/* #19 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555004
	/* java_name */
	.ascii	"android/app/PendingIntent"
	.zero	77

	/* #20 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554994
	/* java_name */
	.ascii	"android/app/TimePickerDialog"
	.zero	74

	/* #21 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554996
	/* java_name */
	.ascii	"android/app/TimePickerDialog$OnTimeSetListener"
	.zero	56

	/* #22 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554997
	/* java_name */
	.ascii	"android/app/UiModeManager"
	.zero	77

	/* #23 */
	/* module_index */
	.long	16
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"android/arch/lifecycle/Lifecycle"
	.zero	70

	/* #24 */
	/* module_index */
	.long	16
	/* type_token_id */
	.long	33554436
	/* java_name */
	.ascii	"android/arch/lifecycle/Lifecycle$State"
	.zero	64

	/* #25 */
	/* module_index */
	.long	16
	/* type_token_id */
	.long	33554438
	/* java_name */
	.ascii	"android/arch/lifecycle/LifecycleObserver"
	.zero	62

	/* #26 */
	/* module_index */
	.long	16
	/* type_token_id */
	.long	33554440
	/* java_name */
	.ascii	"android/arch/lifecycle/LifecycleOwner"
	.zero	65

	/* #27 */
	/* module_index */
	.long	6
	/* type_token_id */
	.long	33554437
	/* java_name */
	.ascii	"android/arch/lifecycle/LiveData"
	.zero	71

	/* #28 */
	/* module_index */
	.long	6
	/* type_token_id */
	.long	33554436
	/* java_name */
	.ascii	"android/arch/lifecycle/Observer"
	.zero	71

	/* #29 */
	/* module_index */
	.long	20
	/* type_token_id */
	.long	33554437
	/* java_name */
	.ascii	"android/arch/lifecycle/ViewModelStore"
	.zero	65

	/* #30 */
	/* module_index */
	.long	20
	/* type_token_id */
	.long	33554436
	/* java_name */
	.ascii	"android/arch/lifecycle/ViewModelStoreOwner"
	.zero	60

	/* #31 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555010
	/* java_name */
	.ascii	"android/content/BroadcastReceiver"
	.zero	69

	/* #32 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555012
	/* java_name */
	.ascii	"android/content/ClipData"
	.zero	78

	/* #33 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555020
	/* java_name */
	.ascii	"android/content/ComponentCallbacks"
	.zero	68

	/* #34 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555022
	/* java_name */
	.ascii	"android/content/ComponentCallbacks2"
	.zero	67

	/* #35 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555013
	/* java_name */
	.ascii	"android/content/ComponentName"
	.zero	73

	/* #36 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555014
	/* java_name */
	.ascii	"android/content/ContentResolver"
	.zero	71

	/* #37 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555007
	/* java_name */
	.ascii	"android/content/Context"
	.zero	79

	/* #38 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555017
	/* java_name */
	.ascii	"android/content/ContextWrapper"
	.zero	72

	/* #39 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555039
	/* java_name */
	.ascii	"android/content/DialogInterface"
	.zero	71

	/* #40 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555024
	/* java_name */
	.ascii	"android/content/DialogInterface$OnCancelListener"
	.zero	54

	/* #41 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555027
	/* java_name */
	.ascii	"android/content/DialogInterface$OnClickListener"
	.zero	55

	/* #42 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555031
	/* java_name */
	.ascii	"android/content/DialogInterface$OnDismissListener"
	.zero	53

	/* #43 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555034
	/* java_name */
	.ascii	"android/content/DialogInterface$OnKeyListener"
	.zero	57

	/* #44 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555036
	/* java_name */
	.ascii	"android/content/DialogInterface$OnMultiChoiceClickListener"
	.zero	44

	/* #45 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555008
	/* java_name */
	.ascii	"android/content/Intent"
	.zero	80

	/* #46 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555040
	/* java_name */
	.ascii	"android/content/IntentFilter"
	.zero	74

	/* #47 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555041
	/* java_name */
	.ascii	"android/content/IntentSender"
	.zero	74

	/* #48 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555047
	/* java_name */
	.ascii	"android/content/SharedPreferences"
	.zero	69

	/* #49 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555043
	/* java_name */
	.ascii	"android/content/SharedPreferences$Editor"
	.zero	62

	/* #50 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555045
	/* java_name */
	.ascii	"android/content/SharedPreferences$OnSharedPreferenceChangeListener"
	.zero	36

	/* #51 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555049
	/* java_name */
	.ascii	"android/content/pm/ApplicationInfo"
	.zero	68

	/* #52 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555052
	/* java_name */
	.ascii	"android/content/pm/PackageInfo"
	.zero	72

	/* #53 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555054
	/* java_name */
	.ascii	"android/content/pm/PackageItemInfo"
	.zero	68

	/* #54 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555055
	/* java_name */
	.ascii	"android/content/pm/PackageManager"
	.zero	69

	/* #55 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555060
	/* java_name */
	.ascii	"android/content/res/AssetManager"
	.zero	70

	/* #56 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555061
	/* java_name */
	.ascii	"android/content/res/ColorStateList"
	.zero	68

	/* #57 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555062
	/* java_name */
	.ascii	"android/content/res/Configuration"
	.zero	69

	/* #58 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555065
	/* java_name */
	.ascii	"android/content/res/Resources"
	.zero	73

	/* #59 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555066
	/* java_name */
	.ascii	"android/content/res/Resources$Theme"
	.zero	67

	/* #60 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555067
	/* java_name */
	.ascii	"android/content/res/TypedArray"
	.zero	72

	/* #61 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555063
	/* java_name */
	.ascii	"android/content/res/XmlResourceParser"
	.zero	65

	/* #62 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554474
	/* java_name */
	.ascii	"android/database/CharArrayBuffer"
	.zero	70

	/* #63 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554475
	/* java_name */
	.ascii	"android/database/ContentObserver"
	.zero	70

	/* #64 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554481
	/* java_name */
	.ascii	"android/database/Cursor"
	.zero	79

	/* #65 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554477
	/* java_name */
	.ascii	"android/database/DataSetObserver"
	.zero	70

	/* #66 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554887
	/* java_name */
	.ascii	"android/graphics/Bitmap"
	.zero	79

	/* #67 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554888
	/* java_name */
	.ascii	"android/graphics/Bitmap$Config"
	.zero	72

	/* #68 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554892
	/* java_name */
	.ascii	"android/graphics/BitmapFactory"
	.zero	72

	/* #69 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554893
	/* java_name */
	.ascii	"android/graphics/BitmapFactory$Options"
	.zero	64

	/* #70 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554889
	/* java_name */
	.ascii	"android/graphics/Canvas"
	.zero	79

	/* #71 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554899
	/* java_name */
	.ascii	"android/graphics/ColorFilter"
	.zero	74

	/* #72 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554901
	/* java_name */
	.ascii	"android/graphics/ImageFormat"
	.zero	74

	/* #73 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554903
	/* java_name */
	.ascii	"android/graphics/Matrix"
	.zero	79

	/* #74 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554904
	/* java_name */
	.ascii	"android/graphics/Paint"
	.zero	80

	/* #75 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554905
	/* java_name */
	.ascii	"android/graphics/Paint$Align"
	.zero	74

	/* #76 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554906
	/* java_name */
	.ascii	"android/graphics/Paint$FontMetricsInt"
	.zero	65

	/* #77 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554907
	/* java_name */
	.ascii	"android/graphics/Paint$Style"
	.zero	74

	/* #78 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554909
	/* java_name */
	.ascii	"android/graphics/Path"
	.zero	81

	/* #79 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554910
	/* java_name */
	.ascii	"android/graphics/Path$Direction"
	.zero	71

	/* #80 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554911
	/* java_name */
	.ascii	"android/graphics/Point"
	.zero	80

	/* #81 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554912
	/* java_name */
	.ascii	"android/graphics/PointF"
	.zero	79

	/* #82 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554913
	/* java_name */
	.ascii	"android/graphics/PorterDuff"
	.zero	75

	/* #83 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554914
	/* java_name */
	.ascii	"android/graphics/PorterDuff$Mode"
	.zero	70

	/* #84 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554915
	/* java_name */
	.ascii	"android/graphics/PorterDuffXfermode"
	.zero	67

	/* #85 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554916
	/* java_name */
	.ascii	"android/graphics/Rect"
	.zero	81

	/* #86 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554917
	/* java_name */
	.ascii	"android/graphics/RectF"
	.zero	80

	/* #87 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554918
	/* java_name */
	.ascii	"android/graphics/Typeface"
	.zero	77

	/* #88 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554920
	/* java_name */
	.ascii	"android/graphics/Xfermode"
	.zero	77

	/* #89 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554935
	/* java_name */
	.ascii	"android/graphics/drawable/Animatable"
	.zero	66

	/* #90 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554939
	/* java_name */
	.ascii	"android/graphics/drawable/Animatable2"
	.zero	65

	/* #91 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554936
	/* java_name */
	.ascii	"android/graphics/drawable/Animatable2$AnimationCallback"
	.zero	47

	/* #92 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554928
	/* java_name */
	.ascii	"android/graphics/drawable/AnimatedVectorDrawable"
	.zero	54

	/* #93 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554929
	/* java_name */
	.ascii	"android/graphics/drawable/AnimationDrawable"
	.zero	59

	/* #94 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554930
	/* java_name */
	.ascii	"android/graphics/drawable/BitmapDrawable"
	.zero	62

	/* #95 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554931
	/* java_name */
	.ascii	"android/graphics/drawable/ColorDrawable"
	.zero	63

	/* #96 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554921
	/* java_name */
	.ascii	"android/graphics/drawable/Drawable"
	.zero	68

	/* #97 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554923
	/* java_name */
	.ascii	"android/graphics/drawable/Drawable$Callback"
	.zero	59

	/* #98 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554924
	/* java_name */
	.ascii	"android/graphics/drawable/Drawable$ConstantState"
	.zero	54

	/* #99 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554926
	/* java_name */
	.ascii	"android/graphics/drawable/DrawableContainer"
	.zero	59

	/* #100 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554933
	/* java_name */
	.ascii	"android/graphics/drawable/GradientDrawable"
	.zero	60

	/* #101 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554927
	/* java_name */
	.ascii	"android/graphics/drawable/LayerDrawable"
	.zero	63

	/* #102 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554940
	/* java_name */
	.ascii	"android/graphics/drawable/RippleDrawable"
	.zero	62

	/* #103 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554941
	/* java_name */
	.ascii	"android/graphics/drawable/ShapeDrawable"
	.zero	63

	/* #104 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554943
	/* java_name */
	.ascii	"android/graphics/drawable/StateListDrawable"
	.zero	59

	/* #105 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554944
	/* java_name */
	.ascii	"android/graphics/drawable/shapes/OvalShape"
	.zero	60

	/* #106 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554945
	/* java_name */
	.ascii	"android/graphics/drawable/shapes/RectShape"
	.zero	60

	/* #107 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554946
	/* java_name */
	.ascii	"android/graphics/drawable/shapes/Shape"
	.zero	64

	/* #108 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554878
	/* java_name */
	.ascii	"android/hardware/Camera"
	.zero	79

	/* #109 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554879
	/* java_name */
	.ascii	"android/hardware/Camera$Area"
	.zero	74

	/* #110 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554881
	/* java_name */
	.ascii	"android/hardware/Camera$AutoFocusCallback"
	.zero	61

	/* #111 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554882
	/* java_name */
	.ascii	"android/hardware/Camera$CameraInfo"
	.zero	68

	/* #112 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554883
	/* java_name */
	.ascii	"android/hardware/Camera$Parameters"
	.zero	68

	/* #113 */
	/* module_index */
	.long	21
	/* type_token_id */
	.long	33554436
	/* java_name */
	.ascii	"android/hardware/Camera$PreviewCallback"
	.zero	63

	/* #114 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554884
	/* java_name */
	.ascii	"android/hardware/Camera$Size"
	.zero	74

	/* #115 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554855
	/* java_name */
	.ascii	"android/media/MediaMetadataRetriever"
	.zero	66

	/* #116 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554856
	/* java_name */
	.ascii	"android/media/MediaPlayer"
	.zero	77

	/* #117 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554858
	/* java_name */
	.ascii	"android/media/MediaPlayer$OnBufferingUpdateListener"
	.zero	51

	/* #118 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554862
	/* java_name */
	.ascii	"android/media/MediaPlayer$OnCompletionListener"
	.zero	56

	/* #119 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554864
	/* java_name */
	.ascii	"android/media/MediaPlayer$OnErrorListener"
	.zero	61

	/* #120 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554866
	/* java_name */
	.ascii	"android/media/MediaPlayer$OnInfoListener"
	.zero	62

	/* #121 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554868
	/* java_name */
	.ascii	"android/media/MediaPlayer$OnPreparedListener"
	.zero	58

	/* #122 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554872
	/* java_name */
	.ascii	"android/media/VolumeAutomation"
	.zero	72

	/* #123 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554876
	/* java_name */
	.ascii	"android/media/VolumeShaper"
	.zero	76

	/* #124 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554877
	/* java_name */
	.ascii	"android/media/VolumeShaper$Configuration"
	.zero	62

	/* #125 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554853
	/* java_name */
	.ascii	"android/net/Uri"
	.zero	87

	/* #126 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554827
	/* java_name */
	.ascii	"android/opengl/GLSurfaceView"
	.zero	74

	/* #127 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554829
	/* java_name */
	.ascii	"android/opengl/GLSurfaceView$Renderer"
	.zero	65

	/* #128 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554834
	/* java_name */
	.ascii	"android/os/BaseBundle"
	.zero	81

	/* #129 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554835
	/* java_name */
	.ascii	"android/os/Build"
	.zero	86

	/* #130 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554836
	/* java_name */
	.ascii	"android/os/Build$VERSION"
	.zero	78

	/* #131 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554838
	/* java_name */
	.ascii	"android/os/Bundle"
	.zero	85

	/* #132 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554831
	/* java_name */
	.ascii	"android/os/Handler"
	.zero	84

	/* #133 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554842
	/* java_name */
	.ascii	"android/os/IBinder"
	.zero	84

	/* #134 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554840
	/* java_name */
	.ascii	"android/os/IBinder$DeathRecipient"
	.zero	69

	/* #135 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554844
	/* java_name */
	.ascii	"android/os/IInterface"
	.zero	81

	/* #136 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554849
	/* java_name */
	.ascii	"android/os/Looper"
	.zero	85

	/* #137 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554832
	/* java_name */
	.ascii	"android/os/Message"
	.zero	84

	/* #138 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554850
	/* java_name */
	.ascii	"android/os/Parcel"
	.zero	85

	/* #139 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554848
	/* java_name */
	.ascii	"android/os/Parcelable"
	.zero	81

	/* #140 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554846
	/* java_name */
	.ascii	"android/os/Parcelable$Creator"
	.zero	73

	/* #141 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554833
	/* java_name */
	.ascii	"android/os/PowerManager"
	.zero	79

	/* #142 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554826
	/* java_name */
	.ascii	"android/preference/PreferenceManager"
	.zero	66

	/* #143 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554470
	/* java_name */
	.ascii	"android/provider/Settings"
	.zero	77

	/* #144 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554471
	/* java_name */
	.ascii	"android/provider/Settings$Global"
	.zero	70

	/* #145 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554472
	/* java_name */
	.ascii	"android/provider/Settings$NameValueTable"
	.zero	62

	/* #146 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554473
	/* java_name */
	.ascii	"android/provider/Settings$System"
	.zero	70

	/* #147 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555114
	/* java_name */
	.ascii	"android/runtime/JavaProxyThrowable"
	.zero	68

	/* #148 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555140
	/* java_name */
	.ascii	"android/runtime/XmlReaderPullParser"
	.zero	67

	/* #149 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554476
	/* java_name */
	.ascii	"android/support/design/internal/BottomNavigationItemView"
	.zero	46

	/* #150 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554477
	/* java_name */
	.ascii	"android/support/design/internal/BottomNavigationMenuView"
	.zero	46

	/* #151 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554478
	/* java_name */
	.ascii	"android/support/design/internal/BottomNavigationPresenter"
	.zero	45

	/* #152 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554450
	/* java_name */
	.ascii	"android/support/design/widget/AppBarLayout"
	.zero	60

	/* #153 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554451
	/* java_name */
	.ascii	"android/support/design/widget/AppBarLayout$LayoutParams"
	.zero	47

	/* #154 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554453
	/* java_name */
	.ascii	"android/support/design/widget/AppBarLayout$OnOffsetChangedListener"
	.zero	36

	/* #155 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554456
	/* java_name */
	.ascii	"android/support/design/widget/AppBarLayout$ScrollingViewBehavior"
	.zero	38

	/* #156 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554459
	/* java_name */
	.ascii	"android/support/design/widget/BottomNavigationView"
	.zero	52

	/* #157 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554461
	/* java_name */
	.ascii	"android/support/design/widget/BottomNavigationView$OnNavigationItemReselectedListener"
	.zero	17

	/* #158 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554465
	/* java_name */
	.ascii	"android/support/design/widget/BottomNavigationView$OnNavigationItemSelectedListener"
	.zero	19

	/* #159 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554472
	/* java_name */
	.ascii	"android/support/design/widget/BottomSheetDialog"
	.zero	55

	/* #160 */
	/* module_index */
	.long	7
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"android/support/design/widget/CoordinatorLayout"
	.zero	55

	/* #161 */
	/* module_index */
	.long	7
	/* type_token_id */
	.long	33554436
	/* java_name */
	.ascii	"android/support/design/widget/CoordinatorLayout$Behavior"
	.zero	46

	/* #162 */
	/* module_index */
	.long	7
	/* type_token_id */
	.long	33554438
	/* java_name */
	.ascii	"android/support/design/widget/CoordinatorLayout$LayoutParams"
	.zero	42

	/* #163 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554473
	/* java_name */
	.ascii	"android/support/design/widget/HeaderScrollingViewBehavior"
	.zero	45

	/* #164 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"android/support/design/widget/TabLayout"
	.zero	63

	/* #165 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554438
	/* java_name */
	.ascii	"android/support/design/widget/TabLayout$BaseOnTabSelectedListener"
	.zero	37

	/* #166 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554443
	/* java_name */
	.ascii	"android/support/design/widget/TabLayout$Tab"
	.zero	59

	/* #167 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554436
	/* java_name */
	.ascii	"android/support/design/widget/TabLayout$TabView"
	.zero	55

	/* #168 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554475
	/* java_name */
	.ascii	"android/support/design/widget/ViewOffsetBehavior"
	.zero	54

	/* #169 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"android/support/v13/view/DragAndDropPermissionsCompat"
	.zero	49

	/* #170 */
	/* module_index */
	.long	2
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"android/support/v4/app/ActionBarDrawerToggle"
	.zero	58

	/* #171 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554508
	/* java_name */
	.ascii	"android/support/v4/app/ActivityCompat"
	.zero	65

	/* #172 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554510
	/* java_name */
	.ascii	"android/support/v4/app/ActivityCompat$OnRequestPermissionsResultCallback"
	.zero	30

	/* #173 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554512
	/* java_name */
	.ascii	"android/support/v4/app/ActivityCompat$PermissionCompatDelegate"
	.zero	40

	/* #174 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554514
	/* java_name */
	.ascii	"android/support/v4/app/ActivityCompat$RequestPermissionsRequestCodeValidator"
	.zero	26

	/* #175 */
	/* module_index */
	.long	11
	/* type_token_id */
	.long	33554436
	/* java_name */
	.ascii	"android/support/v4/app/Fragment"
	.zero	71

	/* #176 */
	/* module_index */
	.long	11
	/* type_token_id */
	.long	33554437
	/* java_name */
	.ascii	"android/support/v4/app/Fragment$SavedState"
	.zero	60

	/* #177 */
	/* module_index */
	.long	11
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"android/support/v4/app/FragmentActivity"
	.zero	63

	/* #178 */
	/* module_index */
	.long	11
	/* type_token_id */
	.long	33554438
	/* java_name */
	.ascii	"android/support/v4/app/FragmentManager"
	.zero	64

	/* #179 */
	/* module_index */
	.long	11
	/* type_token_id */
	.long	33554440
	/* java_name */
	.ascii	"android/support/v4/app/FragmentManager$BackStackEntry"
	.zero	49

	/* #180 */
	/* module_index */
	.long	11
	/* type_token_id */
	.long	33554441
	/* java_name */
	.ascii	"android/support/v4/app/FragmentManager$FragmentLifecycleCallbacks"
	.zero	37

	/* #181 */
	/* module_index */
	.long	11
	/* type_token_id */
	.long	33554444
	/* java_name */
	.ascii	"android/support/v4/app/FragmentManager$OnBackStackChangedListener"
	.zero	37

	/* #182 */
	/* module_index */
	.long	11
	/* type_token_id */
	.long	33554449
	/* java_name */
	.ascii	"android/support/v4/app/FragmentPagerAdapter"
	.zero	59

	/* #183 */
	/* module_index */
	.long	11
	/* type_token_id */
	.long	33554451
	/* java_name */
	.ascii	"android/support/v4/app/FragmentTransaction"
	.zero	60

	/* #184 */
	/* module_index */
	.long	3
	/* type_token_id */
	.long	33554440
	/* java_name */
	.ascii	"android/support/v4/app/LoaderManager"
	.zero	66

	/* #185 */
	/* module_index */
	.long	3
	/* type_token_id */
	.long	33554442
	/* java_name */
	.ascii	"android/support/v4/app/LoaderManager$LoaderCallbacks"
	.zero	50

	/* #186 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554515
	/* java_name */
	.ascii	"android/support/v4/app/SharedElementCallback"
	.zero	58

	/* #187 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554517
	/* java_name */
	.ascii	"android/support/v4/app/SharedElementCallback$OnSharedElementsReadyListener"
	.zero	28

	/* #188 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554519
	/* java_name */
	.ascii	"android/support/v4/app/TaskStackBuilder"
	.zero	63

	/* #189 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554521
	/* java_name */
	.ascii	"android/support/v4/app/TaskStackBuilder$SupportParentable"
	.zero	45

	/* #190 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554507
	/* java_name */
	.ascii	"android/support/v4/content/ContextCompat"
	.zero	62

	/* #191 */
	/* module_index */
	.long	3
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"android/support/v4/content/Loader"
	.zero	69

	/* #192 */
	/* module_index */
	.long	3
	/* type_token_id */
	.long	33554437
	/* java_name */
	.ascii	"android/support/v4/content/Loader$OnLoadCanceledListener"
	.zero	46

	/* #193 */
	/* module_index */
	.long	3
	/* type_token_id */
	.long	33554439
	/* java_name */
	.ascii	"android/support/v4/content/Loader$OnLoadCompleteListener"
	.zero	46

	/* #194 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554506
	/* java_name */
	.ascii	"android/support/v4/graphics/drawable/DrawableCompat"
	.zero	51

	/* #195 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554503
	/* java_name */
	.ascii	"android/support/v4/internal/view/SupportMenu"
	.zero	58

	/* #196 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554505
	/* java_name */
	.ascii	"android/support/v4/internal/view/SupportMenuItem"
	.zero	54

	/* #197 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554522
	/* java_name */
	.ascii	"android/support/v4/text/PrecomputedTextCompat"
	.zero	57

	/* #198 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554523
	/* java_name */
	.ascii	"android/support/v4/text/PrecomputedTextCompat$Params"
	.zero	50

	/* #199 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554451
	/* java_name */
	.ascii	"android/support/v4/view/AccessibilityDelegateCompat"
	.zero	51

	/* #200 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554452
	/* java_name */
	.ascii	"android/support/v4/view/ActionProvider"
	.zero	64

	/* #201 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554454
	/* java_name */
	.ascii	"android/support/v4/view/ActionProvider$SubUiVisibilityListener"
	.zero	40

	/* #202 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554458
	/* java_name */
	.ascii	"android/support/v4/view/ActionProvider$VisibilityListener"
	.zero	45

	/* #203 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554466
	/* java_name */
	.ascii	"android/support/v4/view/DisplayCutoutCompat"
	.zero	59

	/* #204 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554485
	/* java_name */
	.ascii	"android/support/v4/view/MenuItemCompat"
	.zero	64

	/* #205 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554487
	/* java_name */
	.ascii	"android/support/v4/view/MenuItemCompat$OnActionExpandListener"
	.zero	41

	/* #206 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554468
	/* java_name */
	.ascii	"android/support/v4/view/NestedScrollingChild"
	.zero	58

	/* #207 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554470
	/* java_name */
	.ascii	"android/support/v4/view/NestedScrollingChild2"
	.zero	57

	/* #208 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554472
	/* java_name */
	.ascii	"android/support/v4/view/NestedScrollingParent"
	.zero	57

	/* #209 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554474
	/* java_name */
	.ascii	"android/support/v4/view/NestedScrollingParent2"
	.zero	56

	/* #210 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554476
	/* java_name */
	.ascii	"android/support/v4/view/OnApplyWindowInsetsListener"
	.zero	51

	/* #211 */
	/* module_index */
	.long	14
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"android/support/v4/view/PagerAdapter"
	.zero	66

	/* #212 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554488
	/* java_name */
	.ascii	"android/support/v4/view/PointerIconCompat"
	.zero	61

	/* #213 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554489
	/* java_name */
	.ascii	"android/support/v4/view/ScaleGestureDetectorCompat"
	.zero	52

	/* #214 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554478
	/* java_name */
	.ascii	"android/support/v4/view/ScrollingView"
	.zero	65

	/* #215 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554480
	/* java_name */
	.ascii	"android/support/v4/view/TintableBackgroundView"
	.zero	56

	/* #216 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554490
	/* java_name */
	.ascii	"android/support/v4/view/ViewCompat"
	.zero	68

	/* #217 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554492
	/* java_name */
	.ascii	"android/support/v4/view/ViewCompat$OnUnhandledKeyEventListenerCompat"
	.zero	34

	/* #218 */
	/* module_index */
	.long	14
	/* type_token_id */
	.long	33554437
	/* java_name */
	.ascii	"android/support/v4/view/ViewPager"
	.zero	69

	/* #219 */
	/* module_index */
	.long	14
	/* type_token_id */
	.long	33554439
	/* java_name */
	.ascii	"android/support/v4/view/ViewPager$OnAdapterChangeListener"
	.zero	45

	/* #220 */
	/* module_index */
	.long	14
	/* type_token_id */
	.long	33554443
	/* java_name */
	.ascii	"android/support/v4/view/ViewPager$OnPageChangeListener"
	.zero	48

	/* #221 */
	/* module_index */
	.long	14
	/* type_token_id */
	.long	33554449
	/* java_name */
	.ascii	"android/support/v4/view/ViewPager$PageTransformer"
	.zero	53

	/* #222 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554493
	/* java_name */
	.ascii	"android/support/v4/view/ViewPropertyAnimatorCompat"
	.zero	52

	/* #223 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554482
	/* java_name */
	.ascii	"android/support/v4/view/ViewPropertyAnimatorListener"
	.zero	50

	/* #224 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554484
	/* java_name */
	.ascii	"android/support/v4/view/ViewPropertyAnimatorUpdateListener"
	.zero	44

	/* #225 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554494
	/* java_name */
	.ascii	"android/support/v4/view/WindowInsetsCompat"
	.zero	60

	/* #226 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554495
	/* java_name */
	.ascii	"android/support/v4/view/accessibility/AccessibilityNodeInfoCompat"
	.zero	37

	/* #227 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554496
	/* java_name */
	.ascii	"android/support/v4/view/accessibility/AccessibilityNodeInfoCompat$AccessibilityActionCompat"
	.zero	11

	/* #228 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554497
	/* java_name */
	.ascii	"android/support/v4/view/accessibility/AccessibilityNodeInfoCompat$CollectionInfoCompat"
	.zero	16

	/* #229 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554498
	/* java_name */
	.ascii	"android/support/v4/view/accessibility/AccessibilityNodeInfoCompat$CollectionItemInfoCompat"
	.zero	12

	/* #230 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554499
	/* java_name */
	.ascii	"android/support/v4/view/accessibility/AccessibilityNodeInfoCompat$RangeInfoCompat"
	.zero	21

	/* #231 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554500
	/* java_name */
	.ascii	"android/support/v4/view/accessibility/AccessibilityNodeProviderCompat"
	.zero	33

	/* #232 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554501
	/* java_name */
	.ascii	"android/support/v4/view/accessibility/AccessibilityWindowInfoCompat"
	.zero	35

	/* #233 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554438
	/* java_name */
	.ascii	"android/support/v4/widget/AutoSizeableTextView"
	.zero	56

	/* #234 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554436
	/* java_name */
	.ascii	"android/support/v4/widget/CompoundButtonCompat"
	.zero	56

	/* #235 */
	/* module_index */
	.long	15
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"android/support/v4/widget/DrawerLayout"
	.zero	64

	/* #236 */
	/* module_index */
	.long	15
	/* type_token_id */
	.long	33554437
	/* java_name */
	.ascii	"android/support/v4/widget/DrawerLayout$DrawerListener"
	.zero	49

	/* #237 */
	/* module_index */
	.long	15
	/* type_token_id */
	.long	33554443
	/* java_name */
	.ascii	"android/support/v4/widget/DrawerLayout$LayoutParams"
	.zero	51

	/* #238 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554443
	/* java_name */
	.ascii	"android/support/v4/widget/NestedScrollView"
	.zero	60

	/* #239 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554445
	/* java_name */
	.ascii	"android/support/v4/widget/NestedScrollView$OnScrollChangeListener"
	.zero	37

	/* #240 */
	/* module_index */
	.long	12
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"android/support/v4/widget/SwipeRefreshLayout"
	.zero	58

	/* #241 */
	/* module_index */
	.long	12
	/* type_token_id */
	.long	33554437
	/* java_name */
	.ascii	"android/support/v4/widget/SwipeRefreshLayout$OnChildScrollUpCallback"
	.zero	34

	/* #242 */
	/* module_index */
	.long	12
	/* type_token_id */
	.long	33554439
	/* java_name */
	.ascii	"android/support/v4/widget/SwipeRefreshLayout$OnRefreshListener"
	.zero	40

	/* #243 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554450
	/* java_name */
	.ascii	"android/support/v4/widget/TextViewCompat"
	.zero	62

	/* #244 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554440
	/* java_name */
	.ascii	"android/support/v4/widget/TintableCompoundButton"
	.zero	54

	/* #245 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554442
	/* java_name */
	.ascii	"android/support/v4/widget/TintableImageSourceView"
	.zero	53

	/* #246 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554443
	/* java_name */
	.ascii	"android/support/v7/app/ActionBar"
	.zero	70

	/* #247 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554444
	/* java_name */
	.ascii	"android/support/v7/app/ActionBar$LayoutParams"
	.zero	57

	/* #248 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554446
	/* java_name */
	.ascii	"android/support/v7/app/ActionBar$OnMenuVisibilityListener"
	.zero	45

	/* #249 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554450
	/* java_name */
	.ascii	"android/support/v7/app/ActionBar$OnNavigationListener"
	.zero	49

	/* #250 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554451
	/* java_name */
	.ascii	"android/support/v7/app/ActionBar$Tab"
	.zero	66

	/* #251 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554454
	/* java_name */
	.ascii	"android/support/v7/app/ActionBar$TabListener"
	.zero	58

	/* #252 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554458
	/* java_name */
	.ascii	"android/support/v7/app/ActionBarDrawerToggle"
	.zero	58

	/* #253 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554460
	/* java_name */
	.ascii	"android/support/v7/app/ActionBarDrawerToggle$Delegate"
	.zero	49

	/* #254 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554462
	/* java_name */
	.ascii	"android/support/v7/app/ActionBarDrawerToggle$DelegateProvider"
	.zero	41

	/* #255 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554438
	/* java_name */
	.ascii	"android/support/v7/app/AlertDialog"
	.zero	68

	/* #256 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554439
	/* java_name */
	.ascii	"android/support/v7/app/AlertDialog$Builder"
	.zero	60

	/* #257 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554441
	/* java_name */
	.ascii	"android/support/v7/app/AlertDialog_IDialogInterfaceOnCancelListenerImplementor"
	.zero	24

	/* #258 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554440
	/* java_name */
	.ascii	"android/support/v7/app/AlertDialog_IDialogInterfaceOnClickListenerImplementor"
	.zero	25

	/* #259 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554442
	/* java_name */
	.ascii	"android/support/v7/app/AlertDialog_IDialogInterfaceOnMultiChoiceClickListenerImplementor"
	.zero	14

	/* #260 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554463
	/* java_name */
	.ascii	"android/support/v7/app/AppCompatActivity"
	.zero	62

	/* #261 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554468
	/* java_name */
	.ascii	"android/support/v7/app/AppCompatCallback"
	.zero	62

	/* #262 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554464
	/* java_name */
	.ascii	"android/support/v7/app/AppCompatDelegate"
	.zero	62

	/* #263 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554466
	/* java_name */
	.ascii	"android/support/v7/app/AppCompatDialog"
	.zero	64

	/* #264 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554437
	/* java_name */
	.ascii	"android/support/v7/content/res/AppCompatResources"
	.zero	53

	/* #265 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"android/support/v7/graphics/drawable/DrawableWrapper"
	.zero	50

	/* #266 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554436
	/* java_name */
	.ascii	"android/support/v7/graphics/drawable/DrawerArrowDrawable"
	.zero	46

	/* #267 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554489
	/* java_name */
	.ascii	"android/support/v7/view/ActionMode"
	.zero	68

	/* #268 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554491
	/* java_name */
	.ascii	"android/support/v7/view/ActionMode$Callback"
	.zero	59

	/* #269 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554493
	/* java_name */
	.ascii	"android/support/v7/view/menu/MenuBuilder"
	.zero	62

	/* #270 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554495
	/* java_name */
	.ascii	"android/support/v7/view/menu/MenuBuilder$Callback"
	.zero	53

	/* #271 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554504
	/* java_name */
	.ascii	"android/support/v7/view/menu/MenuItemImpl"
	.zero	61

	/* #272 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554499
	/* java_name */
	.ascii	"android/support/v7/view/menu/MenuPresenter"
	.zero	60

	/* #273 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554497
	/* java_name */
	.ascii	"android/support/v7/view/menu/MenuPresenter$Callback"
	.zero	51

	/* #274 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554503
	/* java_name */
	.ascii	"android/support/v7/view/menu/MenuView"
	.zero	65

	/* #275 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554501
	/* java_name */
	.ascii	"android/support/v7/view/menu/MenuView$ItemView"
	.zero	56

	/* #276 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554505
	/* java_name */
	.ascii	"android/support/v7/view/menu/SubMenuBuilder"
	.zero	59

	/* #277 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554479
	/* java_name */
	.ascii	"android/support/v7/widget/AppCompatAutoCompleteTextView"
	.zero	47

	/* #278 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554480
	/* java_name */
	.ascii	"android/support/v7/widget/AppCompatButton"
	.zero	61

	/* #279 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554481
	/* java_name */
	.ascii	"android/support/v7/widget/AppCompatCheckBox"
	.zero	59

	/* #280 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554482
	/* java_name */
	.ascii	"android/support/v7/widget/AppCompatImageButton"
	.zero	56

	/* #281 */
	/* module_index */
	.long	1
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"android/support/v7/widget/CardView"
	.zero	68

	/* #282 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554484
	/* java_name */
	.ascii	"android/support/v7/widget/DecorToolbar"
	.zero	64

	/* #283 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"android/support/v7/widget/GridLayoutManager"
	.zero	59

	/* #284 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554436
	/* java_name */
	.ascii	"android/support/v7/widget/GridLayoutManager$LayoutParams"
	.zero	46

	/* #285 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554437
	/* java_name */
	.ascii	"android/support/v7/widget/GridLayoutManager$SpanSizeLookup"
	.zero	44

	/* #286 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554485
	/* java_name */
	.ascii	"android/support/v7/widget/LinearLayoutCompat"
	.zero	58

	/* #287 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554439
	/* java_name */
	.ascii	"android/support/v7/widget/LinearLayoutManager"
	.zero	57

	/* #288 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554440
	/* java_name */
	.ascii	"android/support/v7/widget/LinearSmoothScroller"
	.zero	56

	/* #289 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554441
	/* java_name */
	.ascii	"android/support/v7/widget/LinearSnapHelper"
	.zero	60

	/* #290 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554442
	/* java_name */
	.ascii	"android/support/v7/widget/OrientationHelper"
	.zero	59

	/* #291 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554444
	/* java_name */
	.ascii	"android/support/v7/widget/PagerSnapHelper"
	.zero	61

	/* #292 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554445
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView"
	.zero	64

	/* #293 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554446
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$Adapter"
	.zero	56

	/* #294 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554448
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$AdapterDataObserver"
	.zero	44

	/* #295 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554451
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$ChildDrawingOrderCallback"
	.zero	38

	/* #296 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554452
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$EdgeEffectFactory"
	.zero	46

	/* #297 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554453
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$ItemAnimator"
	.zero	51

	/* #298 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554455
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$ItemAnimator$ItemAnimatorFinishedListener"
	.zero	22

	/* #299 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554456
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$ItemAnimator$ItemHolderInfo"
	.zero	36

	/* #300 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554458
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$ItemDecoration"
	.zero	49

	/* #301 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554460
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$LayoutManager"
	.zero	50

	/* #302 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554462
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$LayoutManager$LayoutPrefetchRegistry"
	.zero	27

	/* #303 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554463
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$LayoutManager$Properties"
	.zero	39

	/* #304 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554465
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$LayoutParams"
	.zero	51

	/* #305 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554467
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$OnChildAttachStateChangeListener"
	.zero	31

	/* #306 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554471
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$OnFlingListener"
	.zero	48

	/* #307 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554474
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$OnItemTouchListener"
	.zero	44

	/* #308 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554479
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$OnScrollListener"
	.zero	47

	/* #309 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554481
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$RecycledViewPool"
	.zero	47

	/* #310 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554482
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$Recycler"
	.zero	55

	/* #311 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554484
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$RecyclerListener"
	.zero	47

	/* #312 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554487
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$SmoothScroller"
	.zero	49

	/* #313 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554488
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$SmoothScroller$Action"
	.zero	42

	/* #314 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554490
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$SmoothScroller$ScrollVectorProvider"
	.zero	28

	/* #315 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554492
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$State"
	.zero	58

	/* #316 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554493
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$ViewCacheExtension"
	.zero	45

	/* #317 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554495
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerView$ViewHolder"
	.zero	53

	/* #318 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554509
	/* java_name */
	.ascii	"android/support/v7/widget/RecyclerViewAccessibilityDelegate"
	.zero	43

	/* #319 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554486
	/* java_name */
	.ascii	"android/support/v7/widget/ScrollingTabContainerView"
	.zero	51

	/* #320 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554487
	/* java_name */
	.ascii	"android/support/v7/widget/ScrollingTabContainerView$VisibilityAnimListener"
	.zero	28

	/* #321 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554510
	/* java_name */
	.ascii	"android/support/v7/widget/SnapHelper"
	.zero	66

	/* #322 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554488
	/* java_name */
	.ascii	"android/support/v7/widget/SwitchCompat"
	.zero	64

	/* #323 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554469
	/* java_name */
	.ascii	"android/support/v7/widget/Toolbar"
	.zero	69

	/* #324 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554472
	/* java_name */
	.ascii	"android/support/v7/widget/Toolbar$LayoutParams"
	.zero	56

	/* #325 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554474
	/* java_name */
	.ascii	"android/support/v7/widget/Toolbar$OnMenuItemClickListener"
	.zero	45

	/* #326 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554470
	/* java_name */
	.ascii	"android/support/v7/widget/Toolbar_NavigationOnClickEventDispatcher"
	.zero	36

	/* #327 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554514
	/* java_name */
	.ascii	"android/support/v7/widget/helper/ItemTouchHelper"
	.zero	54

	/* #328 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554515
	/* java_name */
	.ascii	"android/support/v7/widget/helper/ItemTouchHelper$Callback"
	.zero	45

	/* #329 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554518
	/* java_name */
	.ascii	"android/support/v7/widget/helper/ItemTouchHelper$ViewDropHandler"
	.zero	38

	/* #330 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554513
	/* java_name */
	.ascii	"android/support/v7/widget/helper/ItemTouchUIUtil"
	.zero	54

	/* #331 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554761
	/* java_name */
	.ascii	"android/text/Editable"
	.zero	81

	/* #332 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554764
	/* java_name */
	.ascii	"android/text/GetChars"
	.zero	81

	/* #333 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554759
	/* java_name */
	.ascii	"android/text/Html"
	.zero	85

	/* #334 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554768
	/* java_name */
	.ascii	"android/text/InputFilter"
	.zero	78

	/* #335 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554766
	/* java_name */
	.ascii	"android/text/InputFilter$LengthFilter"
	.zero	65

	/* #336 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554784
	/* java_name */
	.ascii	"android/text/Layout"
	.zero	83

	/* #337 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554785
	/* java_name */
	.ascii	"android/text/Layout$Alignment"
	.zero	73

	/* #338 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554770
	/* java_name */
	.ascii	"android/text/NoCopySpan"
	.zero	79

	/* #339 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554773
	/* java_name */
	.ascii	"android/text/ParcelableSpan"
	.zero	75

	/* #340 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554775
	/* java_name */
	.ascii	"android/text/Spannable"
	.zero	80

	/* #341 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554787
	/* java_name */
	.ascii	"android/text/SpannableString"
	.zero	74

	/* #342 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554789
	/* java_name */
	.ascii	"android/text/SpannableStringBuilder"
	.zero	67

	/* #343 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554791
	/* java_name */
	.ascii	"android/text/SpannableStringInternal"
	.zero	66

	/* #344 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554778
	/* java_name */
	.ascii	"android/text/Spanned"
	.zero	82

	/* #345 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554794
	/* java_name */
	.ascii	"android/text/StaticLayout"
	.zero	77

	/* #346 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554781
	/* java_name */
	.ascii	"android/text/TextDirectionHeuristic"
	.zero	67

	/* #347 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554795
	/* java_name */
	.ascii	"android/text/TextPaint"
	.zero	80

	/* #348 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554796
	/* java_name */
	.ascii	"android/text/TextUtils"
	.zero	80

	/* #349 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554797
	/* java_name */
	.ascii	"android/text/TextUtils$TruncateAt"
	.zero	69

	/* #350 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554783
	/* java_name */
	.ascii	"android/text/TextWatcher"
	.zero	78

	/* #351 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554825
	/* java_name */
	.ascii	"android/text/format/DateFormat"
	.zero	72

	/* #352 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554814
	/* java_name */
	.ascii	"android/text/method/BaseKeyListener"
	.zero	67

	/* #353 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554816
	/* java_name */
	.ascii	"android/text/method/DigitsKeyListener"
	.zero	65

	/* #354 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554818
	/* java_name */
	.ascii	"android/text/method/KeyListener"
	.zero	71

	/* #355 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554821
	/* java_name */
	.ascii	"android/text/method/MetaKeyKeyListener"
	.zero	64

	/* #356 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554823
	/* java_name */
	.ascii	"android/text/method/NumberKeyListener"
	.zero	65

	/* #357 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554820
	/* java_name */
	.ascii	"android/text/method/TransformationMethod"
	.zero	62

	/* #358 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554798
	/* java_name */
	.ascii	"android/text/style/BackgroundColorSpan"
	.zero	64

	/* #359 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554799
	/* java_name */
	.ascii	"android/text/style/CharacterStyle"
	.zero	69

	/* #360 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554801
	/* java_name */
	.ascii	"android/text/style/ForegroundColorSpan"
	.zero	64

	/* #361 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554803
	/* java_name */
	.ascii	"android/text/style/LineHeightSpan"
	.zero	69

	/* #362 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554812
	/* java_name */
	.ascii	"android/text/style/MetricAffectingSpan"
	.zero	64

	/* #363 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554805
	/* java_name */
	.ascii	"android/text/style/ParagraphStyle"
	.zero	69

	/* #364 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554807
	/* java_name */
	.ascii	"android/text/style/UpdateAppearance"
	.zero	67

	/* #365 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554809
	/* java_name */
	.ascii	"android/text/style/UpdateLayout"
	.zero	71

	/* #366 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554811
	/* java_name */
	.ascii	"android/text/style/WrapTogetherSpan"
	.zero	67

	/* #367 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554753
	/* java_name */
	.ascii	"android/util/AttributeSet"
	.zero	77

	/* #368 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554751
	/* java_name */
	.ascii	"android/util/DisplayMetrics"
	.zero	75

	/* #369 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554749
	/* java_name */
	.ascii	"android/util/Log"
	.zero	86

	/* #370 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554754
	/* java_name */
	.ascii	"android/util/LruCache"
	.zero	81

	/* #371 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554755
	/* java_name */
	.ascii	"android/util/SparseArray"
	.zero	78

	/* #372 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554756
	/* java_name */
	.ascii	"android/util/StateSet"
	.zero	81

	/* #373 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554757
	/* java_name */
	.ascii	"android/util/TypedValue"
	.zero	79

	/* #374 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554630
	/* java_name */
	.ascii	"android/view/ActionMode"
	.zero	79

	/* #375 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554632
	/* java_name */
	.ascii	"android/view/ActionMode$Callback"
	.zero	70

	/* #376 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554635
	/* java_name */
	.ascii	"android/view/ActionProvider"
	.zero	75

	/* #377 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554651
	/* java_name */
	.ascii	"android/view/CollapsibleActionView"
	.zero	68

	/* #378 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554655
	/* java_name */
	.ascii	"android/view/ContextMenu"
	.zero	78

	/* #379 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554653
	/* java_name */
	.ascii	"android/view/ContextMenu$ContextMenuInfo"
	.zero	62

	/* #380 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554638
	/* java_name */
	.ascii	"android/view/ContextThemeWrapper"
	.zero	70

	/* #381 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554640
	/* java_name */
	.ascii	"android/view/Display"
	.zero	82

	/* #382 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554641
	/* java_name */
	.ascii	"android/view/DragEvent"
	.zero	80

	/* #383 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554644
	/* java_name */
	.ascii	"android/view/GestureDetector"
	.zero	74

	/* #384 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554646
	/* java_name */
	.ascii	"android/view/GestureDetector$OnDoubleTapListener"
	.zero	54

	/* #385 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554648
	/* java_name */
	.ascii	"android/view/GestureDetector$OnGestureListener"
	.zero	56

	/* #386 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554667
	/* java_name */
	.ascii	"android/view/InputEvent"
	.zero	79

	/* #387 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554609
	/* java_name */
	.ascii	"android/view/KeyEvent"
	.zero	81

	/* #388 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554611
	/* java_name */
	.ascii	"android/view/KeyEvent$Callback"
	.zero	72

	/* #389 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554612
	/* java_name */
	.ascii	"android/view/LayoutInflater"
	.zero	75

	/* #390 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554614
	/* java_name */
	.ascii	"android/view/LayoutInflater$Factory"
	.zero	67

	/* #391 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554616
	/* java_name */
	.ascii	"android/view/LayoutInflater$Factory2"
	.zero	66

	/* #392 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554658
	/* java_name */
	.ascii	"android/view/Menu"
	.zero	85

	/* #393 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554691
	/* java_name */
	.ascii	"android/view/MenuInflater"
	.zero	77

	/* #394 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554665
	/* java_name */
	.ascii	"android/view/MenuItem"
	.zero	81

	/* #395 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554660
	/* java_name */
	.ascii	"android/view/MenuItem$OnActionExpandListener"
	.zero	58

	/* #396 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554662
	/* java_name */
	.ascii	"android/view/MenuItem$OnMenuItemClickListener"
	.zero	57

	/* #397 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554617
	/* java_name */
	.ascii	"android/view/MotionEvent"
	.zero	78

	/* #398 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554696
	/* java_name */
	.ascii	"android/view/ScaleGestureDetector"
	.zero	69

	/* #399 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554698
	/* java_name */
	.ascii	"android/view/ScaleGestureDetector$OnScaleGestureListener"
	.zero	46

	/* #400 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554699
	/* java_name */
	.ascii	"android/view/ScaleGestureDetector$SimpleOnScaleGestureListener"
	.zero	40

	/* #401 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554701
	/* java_name */
	.ascii	"android/view/SearchEvent"
	.zero	78

	/* #402 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554670
	/* java_name */
	.ascii	"android/view/SubMenu"
	.zero	82

	/* #403 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554704
	/* java_name */
	.ascii	"android/view/Surface"
	.zero	82

	/* #404 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554676
	/* java_name */
	.ascii	"android/view/SurfaceHolder"
	.zero	76

	/* #405 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554672
	/* java_name */
	.ascii	"android/view/SurfaceHolder$Callback"
	.zero	67

	/* #406 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554674
	/* java_name */
	.ascii	"android/view/SurfaceHolder$Callback2"
	.zero	66

	/* #407 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554707
	/* java_name */
	.ascii	"android/view/SurfaceView"
	.zero	78

	/* #408 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554571
	/* java_name */
	.ascii	"android/view/View"
	.zero	85

	/* #409 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554572
	/* java_name */
	.ascii	"android/view/View$AccessibilityDelegate"
	.zero	63

	/* #410 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554573
	/* java_name */
	.ascii	"android/view/View$DragShadowBuilder"
	.zero	67

	/* #411 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554574
	/* java_name */
	.ascii	"android/view/View$MeasureSpec"
	.zero	73

	/* #412 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554576
	/* java_name */
	.ascii	"android/view/View$OnAttachStateChangeListener"
	.zero	57

	/* #413 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554581
	/* java_name */
	.ascii	"android/view/View$OnClickListener"
	.zero	69

	/* #414 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554584
	/* java_name */
	.ascii	"android/view/View$OnCreateContextMenuListener"
	.zero	57

	/* #415 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554586
	/* java_name */
	.ascii	"android/view/View$OnFocusChangeListener"
	.zero	63

	/* #416 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554588
	/* java_name */
	.ascii	"android/view/View$OnKeyListener"
	.zero	71

	/* #417 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554592
	/* java_name */
	.ascii	"android/view/View$OnLayoutChangeListener"
	.zero	62

	/* #418 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554596
	/* java_name */
	.ascii	"android/view/View$OnTouchListener"
	.zero	69

	/* #419 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554710
	/* java_name */
	.ascii	"android/view/ViewConfiguration"
	.zero	72

	/* #420 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554711
	/* java_name */
	.ascii	"android/view/ViewGroup"
	.zero	80

	/* #421 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554712
	/* java_name */
	.ascii	"android/view/ViewGroup$LayoutParams"
	.zero	67

	/* #422 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554713
	/* java_name */
	.ascii	"android/view/ViewGroup$MarginLayoutParams"
	.zero	61

	/* #423 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554715
	/* java_name */
	.ascii	"android/view/ViewGroup$OnHierarchyChangeListener"
	.zero	54

	/* #424 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554678
	/* java_name */
	.ascii	"android/view/ViewManager"
	.zero	78

	/* #425 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554680
	/* java_name */
	.ascii	"android/view/ViewParent"
	.zero	79

	/* #426 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554717
	/* java_name */
	.ascii	"android/view/ViewPropertyAnimator"
	.zero	69

	/* #427 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554618
	/* java_name */
	.ascii	"android/view/ViewTreeObserver"
	.zero	73

	/* #428 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554620
	/* java_name */
	.ascii	"android/view/ViewTreeObserver$OnGlobalFocusChangeListener"
	.zero	45

	/* #429 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554622
	/* java_name */
	.ascii	"android/view/ViewTreeObserver$OnGlobalLayoutListener"
	.zero	50

	/* #430 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554624
	/* java_name */
	.ascii	"android/view/ViewTreeObserver$OnPreDrawListener"
	.zero	55

	/* #431 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554626
	/* java_name */
	.ascii	"android/view/ViewTreeObserver$OnTouchModeChangeListener"
	.zero	47

	/* #432 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554627
	/* java_name */
	.ascii	"android/view/Window"
	.zero	83

	/* #433 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554629
	/* java_name */
	.ascii	"android/view/Window$Callback"
	.zero	74

	/* #434 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554721
	/* java_name */
	.ascii	"android/view/WindowInsets"
	.zero	77

	/* #435 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554683
	/* java_name */
	.ascii	"android/view/WindowManager"
	.zero	76

	/* #436 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554681
	/* java_name */
	.ascii	"android/view/WindowManager$LayoutParams"
	.zero	63

	/* #437 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554740
	/* java_name */
	.ascii	"android/view/accessibility/AccessibilityEvent"
	.zero	57

	/* #438 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554748
	/* java_name */
	.ascii	"android/view/accessibility/AccessibilityEventSource"
	.zero	51

	/* #439 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554741
	/* java_name */
	.ascii	"android/view/accessibility/AccessibilityManager"
	.zero	55

	/* #440 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554742
	/* java_name */
	.ascii	"android/view/accessibility/AccessibilityNodeInfo"
	.zero	54

	/* #441 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554743
	/* java_name */
	.ascii	"android/view/accessibility/AccessibilityRecord"
	.zero	56

	/* #442 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554723
	/* java_name */
	.ascii	"android/view/animation/AccelerateInterpolator"
	.zero	57

	/* #443 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554724
	/* java_name */
	.ascii	"android/view/animation/Animation"
	.zero	70

	/* #444 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554726
	/* java_name */
	.ascii	"android/view/animation/Animation$AnimationListener"
	.zero	52

	/* #445 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554728
	/* java_name */
	.ascii	"android/view/animation/AnimationSet"
	.zero	67

	/* #446 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554729
	/* java_name */
	.ascii	"android/view/animation/AnimationUtils"
	.zero	65

	/* #447 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554730
	/* java_name */
	.ascii	"android/view/animation/BaseInterpolator"
	.zero	63

	/* #448 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554732
	/* java_name */
	.ascii	"android/view/animation/DecelerateInterpolator"
	.zero	57

	/* #449 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554734
	/* java_name */
	.ascii	"android/view/animation/Interpolator"
	.zero	67

	/* #450 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554735
	/* java_name */
	.ascii	"android/view/animation/LinearInterpolator"
	.zero	61

	/* #451 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554736
	/* java_name */
	.ascii	"android/view/inputmethod/InputMethodManager"
	.zero	59

	/* #452 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554457
	/* java_name */
	.ascii	"android/webkit/ValueCallback"
	.zero	74

	/* #453 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554461
	/* java_name */
	.ascii	"android/webkit/WebChromeClient"
	.zero	72

	/* #454 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554462
	/* java_name */
	.ascii	"android/webkit/WebChromeClient$FileChooserParams"
	.zero	54

	/* #455 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554464
	/* java_name */
	.ascii	"android/webkit/WebResourceError"
	.zero	71

	/* #456 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554459
	/* java_name */
	.ascii	"android/webkit/WebResourceRequest"
	.zero	69

	/* #457 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554466
	/* java_name */
	.ascii	"android/webkit/WebSettings"
	.zero	76

	/* #458 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554468
	/* java_name */
	.ascii	"android/webkit/WebView"
	.zero	80

	/* #459 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554469
	/* java_name */
	.ascii	"android/webkit/WebViewClient"
	.zero	74

	/* #460 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554482
	/* java_name */
	.ascii	"android/widget/AbsListView"
	.zero	76

	/* #461 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554484
	/* java_name */
	.ascii	"android/widget/AbsListView$OnScrollListener"
	.zero	59

	/* #462 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554512
	/* java_name */
	.ascii	"android/widget/AbsSeekBar"
	.zero	77

	/* #463 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554510
	/* java_name */
	.ascii	"android/widget/AbsoluteLayout"
	.zero	73

	/* #464 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554511
	/* java_name */
	.ascii	"android/widget/AbsoluteLayout$LayoutParams"
	.zero	60

	/* #465 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554536
	/* java_name */
	.ascii	"android/widget/Adapter"
	.zero	80

	/* #466 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554486
	/* java_name */
	.ascii	"android/widget/AdapterView"
	.zero	76

	/* #467 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554488
	/* java_name */
	.ascii	"android/widget/AdapterView$OnItemClickListener"
	.zero	56

	/* #468 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554492
	/* java_name */
	.ascii	"android/widget/AdapterView$OnItemLongClickListener"
	.zero	52

	/* #469 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554494
	/* java_name */
	.ascii	"android/widget/AdapterView$OnItemSelectedListener"
	.zero	53

	/* #470 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554496
	/* java_name */
	.ascii	"android/widget/AutoCompleteTextView"
	.zero	67

	/* #471 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"android/widget/BaseAdapter"
	.zero	76

	/* #472 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554518
	/* java_name */
	.ascii	"android/widget/Button"
	.zero	81

	/* #473 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554519
	/* java_name */
	.ascii	"android/widget/CheckBox"
	.zero	79

	/* #474 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554538
	/* java_name */
	.ascii	"android/widget/Checkable"
	.zero	78

	/* #475 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554521
	/* java_name */
	.ascii	"android/widget/CompoundButton"
	.zero	73

	/* #476 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554523
	/* java_name */
	.ascii	"android/widget/CompoundButton$OnCheckedChangeListener"
	.zero	49

	/* #477 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554500
	/* java_name */
	.ascii	"android/widget/DatePicker"
	.zero	77

	/* #478 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554502
	/* java_name */
	.ascii	"android/widget/DatePicker$OnDateChangedListener"
	.zero	55

	/* #479 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554525
	/* java_name */
	.ascii	"android/widget/EdgeEffect"
	.zero	77

	/* #480 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554526
	/* java_name */
	.ascii	"android/widget/EditText"
	.zero	79

	/* #481 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554527
	/* java_name */
	.ascii	"android/widget/Filter"
	.zero	81

	/* #482 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554529
	/* java_name */
	.ascii	"android/widget/Filter$FilterListener"
	.zero	66

	/* #483 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554530
	/* java_name */
	.ascii	"android/widget/Filter$FilterResults"
	.zero	67

	/* #484 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554540
	/* java_name */
	.ascii	"android/widget/Filterable"
	.zero	77

	/* #485 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554532
	/* java_name */
	.ascii	"android/widget/FrameLayout"
	.zero	76

	/* #486 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554533
	/* java_name */
	.ascii	"android/widget/FrameLayout$LayoutParams"
	.zero	63

	/* #487 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554534
	/* java_name */
	.ascii	"android/widget/HorizontalScrollView"
	.zero	67

	/* #488 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554543
	/* java_name */
	.ascii	"android/widget/ImageButton"
	.zero	76

	/* #489 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554544
	/* java_name */
	.ascii	"android/widget/ImageView"
	.zero	78

	/* #490 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554545
	/* java_name */
	.ascii	"android/widget/ImageView$ScaleType"
	.zero	68

	/* #491 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554551
	/* java_name */
	.ascii	"android/widget/LinearLayout"
	.zero	75

	/* #492 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554552
	/* java_name */
	.ascii	"android/widget/LinearLayout$LayoutParams"
	.zero	62

	/* #493 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554542
	/* java_name */
	.ascii	"android/widget/ListAdapter"
	.zero	76

	/* #494 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554553
	/* java_name */
	.ascii	"android/widget/ListView"
	.zero	79

	/* #495 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554503
	/* java_name */
	.ascii	"android/widget/MediaController"
	.zero	72

	/* #496 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554505
	/* java_name */
	.ascii	"android/widget/MediaController$MediaPlayerControl"
	.zero	53

	/* #497 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554554
	/* java_name */
	.ascii	"android/widget/NumberPicker"
	.zero	75

	/* #498 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554556
	/* java_name */
	.ascii	"android/widget/ProgressBar"
	.zero	76

	/* #499 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554557
	/* java_name */
	.ascii	"android/widget/RelativeLayout"
	.zero	73

	/* #500 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554558
	/* java_name */
	.ascii	"android/widget/RelativeLayout$LayoutParams"
	.zero	60

	/* #501 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554560
	/* java_name */
	.ascii	"android/widget/SearchView"
	.zero	77

	/* #502 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554562
	/* java_name */
	.ascii	"android/widget/SearchView$OnQueryTextListener"
	.zero	57

	/* #503 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554547
	/* java_name */
	.ascii	"android/widget/SectionIndexer"
	.zero	73

	/* #504 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554563
	/* java_name */
	.ascii	"android/widget/SeekBar"
	.zero	80

	/* #505 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554565
	/* java_name */
	.ascii	"android/widget/SeekBar$OnSeekBarChangeListener"
	.zero	56

	/* #506 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554549
	/* java_name */
	.ascii	"android/widget/SpinnerAdapter"
	.zero	73

	/* #507 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554566
	/* java_name */
	.ascii	"android/widget/Switch"
	.zero	81

	/* #508 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554506
	/* java_name */
	.ascii	"android/widget/TextView"
	.zero	79

	/* #509 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554507
	/* java_name */
	.ascii	"android/widget/TextView$BufferType"
	.zero	68

	/* #510 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554509
	/* java_name */
	.ascii	"android/widget/TextView$OnEditorActionListener"
	.zero	56

	/* #511 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554567
	/* java_name */
	.ascii	"android/widget/TimePicker"
	.zero	77

	/* #512 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554569
	/* java_name */
	.ascii	"android/widget/TimePicker$OnTimeChangedListener"
	.zero	55

	/* #513 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554570
	/* java_name */
	.ascii	"android/widget/VideoView"
	.zero	78

	/* #514 */
	/* module_index */
	.long	8
	/* type_token_id */
	.long	33554438
	/* java_name */
	.ascii	"com/xamarin/forms/platform/android/FormsViewGroup"
	.zero	53

	/* #515 */
	/* module_index */
	.long	8
	/* type_token_id */
	.long	33554440
	/* java_name */
	.ascii	"com/xamarin/formsviewgroup/BuildConfig"
	.zero	64

	/* #516 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc6414252951f3f66c67/RecyclerViewScrollListener_2"
	.zero	52

	/* #517 */
	/* module_index */
	.long	10
	/* type_token_id */
	.long	33554437
	/* java_name */
	.ascii	"crc6427ea3917517e908b/ZXingBarcodeImageViewRenderer"
	.zero	51

	/* #518 */
	/* module_index */
	.long	10
	/* type_token_id */
	.long	33554434
	/* java_name */
	.ascii	"crc6427ea3917517e908b/ZXingScannerViewRenderer"
	.zero	56

	/* #519 */
	/* module_index */
	.long	13
	/* type_token_id */
	.long	33554462
	/* java_name */
	.ascii	"crc643eead1a2954d3917/CameraEventsListener"
	.zero	60

	/* #520 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554655
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/AHorizontalScrollView"
	.zero	59

	/* #521 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554653
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ActionSheetRenderer"
	.zero	61

	/* #522 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554654
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ActivityIndicatorRenderer"
	.zero	55

	/* #523 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554458
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/AndroidActivity"
	.zero	65

	/* #524 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554483
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/BaseCellView"
	.zero	68

	/* #525 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554667
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/BorderDrawable"
	.zero	66

	/* #526 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554674
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/BoxRenderer"
	.zero	69

	/* #527 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554675
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ButtonRenderer"
	.zero	66

	/* #528 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554676
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ButtonRenderer_ButtonClickListener"
	.zero	46

	/* #529 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554678
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ButtonRenderer_ButtonTouchListener"
	.zero	46

	/* #530 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554680
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CarouselPageAdapter"
	.zero	61

	/* #531 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554681
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CarouselPageRenderer"
	.zero	60

	/* #532 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554502
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CarouselSpacingItemDecoration"
	.zero	51

	/* #533 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554503
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CarouselViewRenderer"
	.zero	60

	/* #534 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554504
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CarouselViewRenderer_CarouselViewOnScrollListener"
	.zero	31

	/* #535 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554505
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CarouselViewRenderer_CarouselViewwOnGlobalLayoutListener"
	.zero	24

	/* #536 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554481
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CellAdapter"
	.zero	69

	/* #537 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554487
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CellRenderer_RendererHolder"
	.zero	53

	/* #538 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554506
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CenterSnapHelper"
	.zero	64

	/* #539 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554462
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CheckBoxDesignerRenderer"
	.zero	56

	/* #540 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554463
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CheckBoxRenderer"
	.zero	64

	/* #541 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554464
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CheckBoxRendererBase"
	.zero	60

	/* #542 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554682
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CircularProgress"
	.zero	64

	/* #543 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554507
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CollectionViewRenderer"
	.zero	58

	/* #544 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554683
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ColorChangeRevealDrawable"
	.zero	55

	/* #545 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554684
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ConditionalFocusLayout"
	.zero	58

	/* #546 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554685
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ContainerView"
	.zero	67

	/* #547 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554686
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/CustomFrameLayout"
	.zero	63

	/* #548 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554508
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/DataChangeObserver"
	.zero	62

	/* #549 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554689
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/DatePickerRenderer"
	.zero	62

	/* #550 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/DatePickerRendererBase_1"
	.zero	56

	/* #551 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554509
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/EdgeSnapHelper"
	.zero	66

	/* #552 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554709
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/EditorEditText"
	.zero	66

	/* #553 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554691
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/EditorRenderer"
	.zero	66

	/* #554 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/EditorRendererBase_1"
	.zero	60

	/* #555 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554511
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/EmptyViewAdapter"
	.zero	64

	/* #556 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554513
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/EndSingleSnapHelper"
	.zero	61

	/* #557 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554514
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/EndSnapHelper"
	.zero	67

	/* #558 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554562
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/EntryAccessibilityDelegate"
	.zero	54

	/* #559 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554489
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/EntryCellEditText"
	.zero	63

	/* #560 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554491
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/EntryCellView"
	.zero	67

	/* #561 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554708
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/EntryEditText"
	.zero	67

	/* #562 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554694
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/EntryRenderer"
	.zero	67

	/* #563 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/EntryRendererBase_1"
	.zero	61

	/* #564 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554701
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormattedStringExtensions_FontSpan"
	.zero	46

	/* #565 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554703
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormattedStringExtensions_LineHeightSpan"
	.zero	40

	/* #566 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554702
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormattedStringExtensions_TextDecorationSpan"
	.zero	36

	/* #567 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554659
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormsAnimationDrawable"
	.zero	58

	/* #568 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554467
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormsAppCompatActivity"
	.zero	58

	/* #569 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554582
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormsApplicationActivity"
	.zero	56

	/* #570 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554704
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormsEditText"
	.zero	67

	/* #571 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554705
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormsEditTextBase"
	.zero	63

	/* #572 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554710
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormsImageView"
	.zero	66

	/* #573 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554711
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormsSeekBar"
	.zero	68

	/* #574 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554712
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormsTextView"
	.zero	67

	/* #575 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554713
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormsVideoView"
	.zero	66

	/* #576 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554716
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormsWebChromeClient"
	.zero	60

	/* #577 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554718
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FormsWebViewClient"
	.zero	62

	/* #578 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554719
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FrameRenderer"
	.zero	67

	/* #579 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554720
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/FrameRenderer_FrameDrawable"
	.zero	53

	/* #580 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554721
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/GenericAnimatorListener"
	.zero	57

	/* #581 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554585
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/GenericGlobalLayoutListener"
	.zero	53

	/* #582 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554586
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/GenericMenuClickListener"
	.zero	56

	/* #583 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554588
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/GestureManager_TapAndPanGestureDetector"
	.zero	41

	/* #584 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554515
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/GridLayoutSpanSizeLookup"
	.zero	56

	/* #585 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/GroupableItemsViewAdapter_2"
	.zero	53

	/* #586 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/GroupableItemsViewRenderer_3"
	.zero	52

	/* #587 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554722
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/GroupedListViewAdapter"
	.zero	58

	/* #588 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554471
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ImageButtonRenderer"
	.zero	61

	/* #589 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554596
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ImageCache_CacheEntry"
	.zero	59

	/* #590 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554597
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ImageCache_FormsLruCache"
	.zero	56

	/* #591 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554734
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ImageRenderer"
	.zero	67

	/* #592 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554521
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/IndicatorViewRenderer"
	.zero	59

	/* #593 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554601
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/InnerGestureListener"
	.zero	60

	/* #594 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554602
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/InnerScaleListener"
	.zero	62

	/* #595 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554522
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ItemContentView"
	.zero	65

	/* #596 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ItemsViewAdapter_2"
	.zero	62

	/* #597 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ItemsViewRenderer_3"
	.zero	61

	/* #598 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554753
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/LabelRenderer"
	.zero	67

	/* #599 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554754
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ListViewAdapter"
	.zero	65

	/* #600 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554756
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ListViewRenderer"
	.zero	64

	/* #601 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554757
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ListViewRenderer_Container"
	.zero	54

	/* #602 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554759
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ListViewRenderer_ListViewScrollDetector"
	.zero	41

	/* #603 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554758
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ListViewRenderer_SwipeRefreshLayoutWithFixedNestedScrolling"
	.zero	21

	/* #604 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554761
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/LocalizedDigitsKeyListener"
	.zero	54

	/* #605 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554762
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/MasterDetailContainer"
	.zero	59

	/* #606 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554763
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/MasterDetailRenderer"
	.zero	60

	/* #607 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554581
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/MediaElementRenderer"
	.zero	60

	/* #608 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554617
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/NativeViewWrapperRenderer"
	.zero	55

	/* #609 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554766
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/NavigationRenderer"
	.zero	62

	/* #610 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554529
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/NongreedySnapHelper"
	.zero	61

	/* #611 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554530
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/NongreedySnapHelper_InitialScrollListener"
	.zero	39

	/* #612 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ObjectJavaBox_1"
	.zero	65

	/* #613 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554770
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/OpenGLViewRenderer"
	.zero	62

	/* #614 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554771
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/OpenGLViewRenderer_Renderer"
	.zero	53

	/* #615 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554772
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/PageContainer"
	.zero	67

	/* #616 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554473
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/PageExtensions_EmbeddedFragment"
	.zero	49

	/* #617 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554475
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/PageExtensions_EmbeddedSupportFragment"
	.zero	42

	/* #618 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554773
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/PageRenderer"
	.zero	68

	/* #619 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554775
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/PickerEditText"
	.zero	66

	/* #620 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554624
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/PickerManager_PickerListener"
	.zero	52

	/* #621 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554776
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/PickerRenderer"
	.zero	66

	/* #622 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554639
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/PlatformRenderer"
	.zero	64

	/* #623 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554627
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/Platform_DefaultRenderer"
	.zero	56

	/* #624 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554535
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/PositionalSmoothScroller"
	.zero	56

	/* #625 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554650
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/PowerSaveModeBroadcastReceiver"
	.zero	50

	/* #626 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554778
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ProgressBarRenderer"
	.zero	61

	/* #627 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554779
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/RefreshViewRenderer"
	.zero	61

	/* #628 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554537
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ScrollHelper"
	.zero	68

	/* #629 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554797
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ScrollLayoutManager"
	.zero	61

	/* #630 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554780
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ScrollViewContainer"
	.zero	61

	/* #631 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554781
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ScrollViewRenderer"
	.zero	62

	/* #632 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554785
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/SearchBarRenderer"
	.zero	63

	/* #633 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/SelectableItemsViewAdapter_2"
	.zero	52

	/* #634 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/SelectableItemsViewRenderer_3"
	.zero	51

	/* #635 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554541
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/SelectableViewHolder"
	.zero	60

	/* #636 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554788
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellContentFragment"
	.zero	60

	/* #637 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554789
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellFlyoutRecyclerAdapter"
	.zero	54

	/* #638 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554792
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellFlyoutRecyclerAdapter_ElementViewHolder"
	.zero	36

	/* #639 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554790
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellFlyoutRecyclerAdapter_LinearLayoutWithFocus"
	.zero	32

	/* #640 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554793
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellFlyoutRenderer"
	.zero	61

	/* #641 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554794
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellFlyoutTemplatedContentRenderer"
	.zero	45

	/* #642 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554795
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellFlyoutTemplatedContentRenderer_HeaderContainer"
	.zero	29

	/* #643 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554798
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellFragmentPagerAdapter"
	.zero	55

	/* #644 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554799
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellItemRenderer"
	.zero	63

	/* #645 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554804
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellItemRendererBase"
	.zero	59

	/* #646 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554806
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellPageContainer"
	.zero	62

	/* #647 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554808
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellRenderer_SplitDrawable"
	.zero	53

	/* #648 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554810
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellSearchView"
	.zero	65

	/* #649 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554814
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellSearchViewAdapter"
	.zero	58

	/* #650 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554815
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellSearchViewAdapter_CustomFilter"
	.zero	45

	/* #651 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554816
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellSearchViewAdapter_ObjectWrapper"
	.zero	44

	/* #652 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554811
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellSearchView_ClipDrawableWrapper"
	.zero	45

	/* #653 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554817
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellSectionRenderer"
	.zero	60

	/* #654 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554821
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellToolbarTracker"
	.zero	61

	/* #655 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554822
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ShellToolbarTracker_FlyoutIconDrawerDrawable"
	.zero	36

	/* #656 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554542
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/SimpleViewHolder"
	.zero	64

	/* #657 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554543
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/SingleSnapHelper"
	.zero	64

	/* #658 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554544
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/SizedItemContentView"
	.zero	60

	/* #659 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554826
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/SliderRenderer"
	.zero	66

	/* #660 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554546
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/SpacingItemDecoration"
	.zero	59

	/* #661 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554547
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/StartSingleSnapHelper"
	.zero	59

	/* #662 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554548
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/StartSnapHelper"
	.zero	65

	/* #663 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554827
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/StepperRenderer"
	.zero	65

	/* #664 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554856
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/StepperRendererManager_StepperListener"
	.zero	42

	/* #665 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/StructuredItemsViewAdapter_2"
	.zero	52

	/* #666 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/StructuredItemsViewRenderer_3"
	.zero	51

	/* #667 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554830
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/SwipeViewRenderer"
	.zero	63

	/* #668 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554494
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/SwitchCellView"
	.zero	66

	/* #669 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554833
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/SwitchRenderer"
	.zero	66

	/* #670 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554834
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/TabbedRenderer"
	.zero	66

	/* #671 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554835
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/TableViewModelRenderer"
	.zero	58

	/* #672 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554836
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/TableViewRenderer"
	.zero	63

	/* #673 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554551
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/TemplatedItemViewHolder"
	.zero	57

	/* #674 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554496
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/TextCellRenderer_TextCellView"
	.zero	51

	/* #675 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554552
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/TextViewHolder"
	.zero	66

	/* #676 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554838
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/TimePickerRenderer"
	.zero	62

	/* #677 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/TimePickerRendererBase_1"
	.zero	56

	/* #678 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554498
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ViewCellRenderer_ViewCellContainer"
	.zero	46

	/* #679 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554499
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ViewCellRenderer_ViewCellContainer_LongPressGestureListener"
	.zero	21

	/* #680 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554866
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ViewRenderer"
	.zero	68

	/* #681 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/ViewRenderer_2"
	.zero	66

	/* #682 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/VisualElementRenderer_1"
	.zero	57

	/* #683 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554874
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/VisualElementTracker_AttachTracker"
	.zero	46

	/* #684 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554842
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/WebViewRenderer"
	.zero	65

	/* #685 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554843
	/* java_name */
	.ascii	"crc643f46942d9dd1fff9/WebViewRenderer_JavascriptResult"
	.zero	48

	/* #686 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554905
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/ButtonRenderer"
	.zero	66

	/* #687 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554906
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/CarouselPageRenderer"
	.zero	60

	/* #688 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/FormsFragmentPagerAdapter_1"
	.zero	53

	/* #689 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554908
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/FormsViewPager"
	.zero	66

	/* #690 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554909
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/FragmentContainer"
	.zero	63

	/* #691 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554910
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/FrameRenderer"
	.zero	67

	/* #692 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554912
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/MasterDetailContainer"
	.zero	59

	/* #693 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554913
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/MasterDetailPageRenderer"
	.zero	56

	/* #694 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554915
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/NavigationPageRenderer"
	.zero	58

	/* #695 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554916
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/NavigationPageRenderer_ClickListener"
	.zero	44

	/* #696 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554917
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/NavigationPageRenderer_Container"
	.zero	48

	/* #697 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554918
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/NavigationPageRenderer_DrawerMultiplexedListener"
	.zero	32

	/* #698 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554927
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/PickerRenderer"
	.zero	66

	/* #699 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/PickerRendererBase_1"
	.zero	60

	/* #700 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554929
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/Platform_ModalContainer"
	.zero	57

	/* #701 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554934
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/ShellFragmentContainer"
	.zero	58

	/* #702 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554935
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/SwitchRenderer"
	.zero	66

	/* #703 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554936
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/TabbedPageRenderer"
	.zero	62

	/* #704 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"crc64720bb2db43a66fe9/ViewRenderer_2"
	.zero	66

	/* #705 */
	/* module_index */
	.long	13
	/* type_token_id */
	.long	33554435
	/* java_name */
	.ascii	"crc6480997b3ef81bf9b2/ActivityLifecycleContextListener"
	.zero	48

	/* #706 */
	/* module_index */
	.long	13
	/* type_token_id */
	.long	33554448
	/* java_name */
	.ascii	"crc6480997b3ef81bf9b2/ZXingScannerFragment"
	.zero	60

	/* #707 */
	/* module_index */
	.long	13
	/* type_token_id */
	.long	33554449
	/* java_name */
	.ascii	"crc6480997b3ef81bf9b2/ZXingSurfaceView"
	.zero	64

	/* #708 */
	/* module_index */
	.long	13
	/* type_token_id */
	.long	33554446
	/* java_name */
	.ascii	"crc6480997b3ef81bf9b2/ZxingActivity"
	.zero	67

	/* #709 */
	/* module_index */
	.long	13
	/* type_token_id */
	.long	33554447
	/* java_name */
	.ascii	"crc6480997b3ef81bf9b2/ZxingOverlayView"
	.zero	64

	/* #710 */
	/* module_index */
	.long	18
	/* type_token_id */
	.long	33554445
	/* java_name */
	.ascii	"crc64a0e0a82d0db9a07d/ActivityLifecycleContextListener"
	.zero	48

	/* #711 */
	/* module_index */
	.long	5
	/* type_token_id */
	.long	33554434
	/* java_name */
	.ascii	"crc64b664d44f98fae181/MainActivity"
	.zero	68

	/* #712 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554891
	/* java_name */
	.ascii	"crc64ee486da937c010f4/ButtonRenderer"
	.zero	66

	/* #713 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554894
	/* java_name */
	.ascii	"crc64ee486da937c010f4/FrameRenderer"
	.zero	67

	/* #714 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554900
	/* java_name */
	.ascii	"crc64ee486da937c010f4/ImageRenderer"
	.zero	67

	/* #715 */
	/* module_index */
	.long	9
	/* type_token_id */
	.long	33554901
	/* java_name */
	.ascii	"crc64ee486da937c010f4/LabelRenderer"
	.zero	67

	/* #716 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555279
	/* java_name */
	.ascii	"java/io/Closeable"
	.zero	85

	/* #717 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555275
	/* java_name */
	.ascii	"java/io/File"
	.zero	90

	/* #718 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555276
	/* java_name */
	.ascii	"java/io/FileDescriptor"
	.zero	80

	/* #719 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555277
	/* java_name */
	.ascii	"java/io/FileInputStream"
	.zero	79

	/* #720 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555281
	/* java_name */
	.ascii	"java/io/Flushable"
	.zero	85

	/* #721 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555284
	/* java_name */
	.ascii	"java/io/IOException"
	.zero	83

	/* #722 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555282
	/* java_name */
	.ascii	"java/io/InputStream"
	.zero	83

	/* #723 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555287
	/* java_name */
	.ascii	"java/io/OutputStream"
	.zero	82

	/* #724 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555289
	/* java_name */
	.ascii	"java/io/PrintWriter"
	.zero	83

	/* #725 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555290
	/* java_name */
	.ascii	"java/io/Reader"
	.zero	88

	/* #726 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555286
	/* java_name */
	.ascii	"java/io/Serializable"
	.zero	82

	/* #727 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555292
	/* java_name */
	.ascii	"java/io/StringWriter"
	.zero	82

	/* #728 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555293
	/* java_name */
	.ascii	"java/io/Writer"
	.zero	88

	/* #729 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555224
	/* java_name */
	.ascii	"java/lang/AbstractMethodError"
	.zero	73

	/* #730 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555232
	/* java_name */
	.ascii	"java/lang/Appendable"
	.zero	82

	/* #731 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555234
	/* java_name */
	.ascii	"java/lang/AutoCloseable"
	.zero	79

	/* #732 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555204
	/* java_name */
	.ascii	"java/lang/Boolean"
	.zero	85

	/* #733 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555205
	/* java_name */
	.ascii	"java/lang/Byte"
	.zero	88

	/* #734 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555235
	/* java_name */
	.ascii	"java/lang/CharSequence"
	.zero	80

	/* #735 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555206
	/* java_name */
	.ascii	"java/lang/Character"
	.zero	83

	/* #736 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555207
	/* java_name */
	.ascii	"java/lang/Class"
	.zero	87

	/* #737 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555225
	/* java_name */
	.ascii	"java/lang/ClassCastException"
	.zero	74

	/* #738 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555226
	/* java_name */
	.ascii	"java/lang/ClassLoader"
	.zero	81

	/* #739 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555208
	/* java_name */
	.ascii	"java/lang/ClassNotFoundException"
	.zero	70

	/* #740 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555238
	/* java_name */
	.ascii	"java/lang/Cloneable"
	.zero	83

	/* #741 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555240
	/* java_name */
	.ascii	"java/lang/Comparable"
	.zero	82

	/* #742 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555209
	/* java_name */
	.ascii	"java/lang/Double"
	.zero	86

	/* #743 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555228
	/* java_name */
	.ascii	"java/lang/Enum"
	.zero	88

	/* #744 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555230
	/* java_name */
	.ascii	"java/lang/Error"
	.zero	87

	/* #745 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555210
	/* java_name */
	.ascii	"java/lang/Exception"
	.zero	83

	/* #746 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555211
	/* java_name */
	.ascii	"java/lang/Float"
	.zero	87

	/* #747 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555243
	/* java_name */
	.ascii	"java/lang/IllegalArgumentException"
	.zero	68

	/* #748 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555244
	/* java_name */
	.ascii	"java/lang/IllegalStateException"
	.zero	71

	/* #749 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555245
	/* java_name */
	.ascii	"java/lang/IncompatibleClassChangeError"
	.zero	64

	/* #750 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555246
	/* java_name */
	.ascii	"java/lang/IndexOutOfBoundsException"
	.zero	67

	/* #751 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555213
	/* java_name */
	.ascii	"java/lang/Integer"
	.zero	85

	/* #752 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555242
	/* java_name */
	.ascii	"java/lang/Iterable"
	.zero	84

	/* #753 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555251
	/* java_name */
	.ascii	"java/lang/LinkageError"
	.zero	80

	/* #754 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555214
	/* java_name */
	.ascii	"java/lang/Long"
	.zero	88

	/* #755 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555252
	/* java_name */
	.ascii	"java/lang/NoClassDefFoundError"
	.zero	72

	/* #756 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555253
	/* java_name */
	.ascii	"java/lang/NullPointerException"
	.zero	72

	/* #757 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555254
	/* java_name */
	.ascii	"java/lang/Number"
	.zero	86

	/* #758 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555215
	/* java_name */
	.ascii	"java/lang/Object"
	.zero	86

	/* #759 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555248
	/* java_name */
	.ascii	"java/lang/Readable"
	.zero	84

	/* #760 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555256
	/* java_name */
	.ascii	"java/lang/ReflectiveOperationException"
	.zero	64

	/* #761 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555250
	/* java_name */
	.ascii	"java/lang/Runnable"
	.zero	84

	/* #762 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555257
	/* java_name */
	.ascii	"java/lang/Runtime"
	.zero	85

	/* #763 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555217
	/* java_name */
	.ascii	"java/lang/RuntimeException"
	.zero	76

	/* #764 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555218
	/* java_name */
	.ascii	"java/lang/Short"
	.zero	87

	/* #765 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555219
	/* java_name */
	.ascii	"java/lang/String"
	.zero	86

	/* #766 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555221
	/* java_name */
	.ascii	"java/lang/Thread"
	.zero	86

	/* #767 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555223
	/* java_name */
	.ascii	"java/lang/Throwable"
	.zero	83

	/* #768 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555258
	/* java_name */
	.ascii	"java/lang/UnsupportedOperationException"
	.zero	63

	/* #769 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555260
	/* java_name */
	.ascii	"java/lang/annotation/Annotation"
	.zero	71

	/* #770 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555261
	/* java_name */
	.ascii	"java/lang/reflect/AccessibleObject"
	.zero	68

	/* #771 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555265
	/* java_name */
	.ascii	"java/lang/reflect/AnnotatedElement"
	.zero	68

	/* #772 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555262
	/* java_name */
	.ascii	"java/lang/reflect/Executable"
	.zero	74

	/* #773 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555267
	/* java_name */
	.ascii	"java/lang/reflect/GenericDeclaration"
	.zero	66

	/* #774 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555269
	/* java_name */
	.ascii	"java/lang/reflect/Member"
	.zero	78

	/* #775 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555274
	/* java_name */
	.ascii	"java/lang/reflect/Method"
	.zero	78

	/* #776 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555271
	/* java_name */
	.ascii	"java/lang/reflect/Type"
	.zero	80

	/* #777 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555273
	/* java_name */
	.ascii	"java/lang/reflect/TypeVariable"
	.zero	72

	/* #778 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555147
	/* java_name */
	.ascii	"java/net/InetSocketAddress"
	.zero	76

	/* #779 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555148
	/* java_name */
	.ascii	"java/net/Proxy"
	.zero	88

	/* #780 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555149
	/* java_name */
	.ascii	"java/net/ProxySelector"
	.zero	80

	/* #781 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555151
	/* java_name */
	.ascii	"java/net/SocketAddress"
	.zero	80

	/* #782 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555153
	/* java_name */
	.ascii	"java/net/URI"
	.zero	90

	/* #783 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555173
	/* java_name */
	.ascii	"java/nio/Buffer"
	.zero	87

	/* #784 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555177
	/* java_name */
	.ascii	"java/nio/ByteBuffer"
	.zero	83

	/* #785 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555174
	/* java_name */
	.ascii	"java/nio/CharBuffer"
	.zero	83

	/* #786 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555180
	/* java_name */
	.ascii	"java/nio/FloatBuffer"
	.zero	82

	/* #787 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555182
	/* java_name */
	.ascii	"java/nio/IntBuffer"
	.zero	84

	/* #788 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555187
	/* java_name */
	.ascii	"java/nio/channels/ByteChannel"
	.zero	73

	/* #789 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555189
	/* java_name */
	.ascii	"java/nio/channels/Channel"
	.zero	77

	/* #790 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555184
	/* java_name */
	.ascii	"java/nio/channels/FileChannel"
	.zero	73

	/* #791 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555191
	/* java_name */
	.ascii	"java/nio/channels/GatheringByteChannel"
	.zero	64

	/* #792 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555193
	/* java_name */
	.ascii	"java/nio/channels/InterruptibleChannel"
	.zero	64

	/* #793 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555195
	/* java_name */
	.ascii	"java/nio/channels/ReadableByteChannel"
	.zero	65

	/* #794 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555197
	/* java_name */
	.ascii	"java/nio/channels/ScatteringByteChannel"
	.zero	63

	/* #795 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555199
	/* java_name */
	.ascii	"java/nio/channels/SeekableByteChannel"
	.zero	65

	/* #796 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555201
	/* java_name */
	.ascii	"java/nio/channels/WritableByteChannel"
	.zero	65

	/* #797 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555202
	/* java_name */
	.ascii	"java/nio/channels/spi/AbstractInterruptibleChannel"
	.zero	52

	/* #798 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555161
	/* java_name */
	.ascii	"java/security/KeyStore"
	.zero	80

	/* #799 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555163
	/* java_name */
	.ascii	"java/security/KeyStore$LoadStoreParameter"
	.zero	61

	/* #800 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555165
	/* java_name */
	.ascii	"java/security/KeyStore$ProtectionParameter"
	.zero	60

	/* #801 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555166
	/* java_name */
	.ascii	"java/security/cert/Certificate"
	.zero	72

	/* #802 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555168
	/* java_name */
	.ascii	"java/security/cert/CertificateFactory"
	.zero	65

	/* #803 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555171
	/* java_name */
	.ascii	"java/security/cert/X509Certificate"
	.zero	68

	/* #804 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555170
	/* java_name */
	.ascii	"java/security/cert/X509Extension"
	.zero	70

	/* #805 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555141
	/* java_name */
	.ascii	"java/text/DecimalFormat"
	.zero	79

	/* #806 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555142
	/* java_name */
	.ascii	"java/text/DecimalFormatSymbols"
	.zero	72

	/* #807 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555145
	/* java_name */
	.ascii	"java/text/Format"
	.zero	86

	/* #808 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555143
	/* java_name */
	.ascii	"java/text/NumberFormat"
	.zero	80

	/* #809 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555106
	/* java_name */
	.ascii	"java/util/ArrayList"
	.zero	83

	/* #810 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555095
	/* java_name */
	.ascii	"java/util/Collection"
	.zero	82

	/* #811 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555097
	/* java_name */
	.ascii	"java/util/HashMap"
	.zero	85

	/* #812 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555115
	/* java_name */
	.ascii	"java/util/HashSet"
	.zero	85

	/* #813 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555155
	/* java_name */
	.ascii	"java/util/Iterator"
	.zero	84

	/* #814 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555157
	/* java_name */
	.ascii	"java/util/concurrent/Executor"
	.zero	73

	/* #815 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555159
	/* java_name */
	.ascii	"java/util/concurrent/Future"
	.zero	75

	/* #816 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555160
	/* java_name */
	.ascii	"java/util/concurrent/TimeUnit"
	.zero	73

	/* #817 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554451
	/* java_name */
	.ascii	"javax/microedition/khronos/egl/EGLConfig"
	.zero	62

	/* #818 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554448
	/* java_name */
	.ascii	"javax/microedition/khronos/opengles/GL"
	.zero	64

	/* #819 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554450
	/* java_name */
	.ascii	"javax/microedition/khronos/opengles/GL10"
	.zero	62

	/* #820 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554443
	/* java_name */
	.ascii	"javax/net/ssl/TrustManager"
	.zero	76

	/* #821 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554446
	/* java_name */
	.ascii	"javax/net/ssl/TrustManagerFactory"
	.zero	69

	/* #822 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554445
	/* java_name */
	.ascii	"javax/net/ssl/X509TrustManager"
	.zero	72

	/* #823 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555316
	/* java_name */
	.ascii	"mono/android/TypeManager"
	.zero	78

	/* #824 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554953
	/* java_name */
	.ascii	"mono/android/animation/AnimatorEventDispatcher"
	.zero	56

	/* #825 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554958
	/* java_name */
	.ascii	"mono/android/animation/ValueAnimator_AnimatorUpdateListenerImplementor"
	.zero	32

	/* #826 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554985
	/* java_name */
	.ascii	"mono/android/app/DatePickerDialog_OnDateSetListenerImplementor"
	.zero	40

	/* #827 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554974
	/* java_name */
	.ascii	"mono/android/app/TabEventDispatcher"
	.zero	67

	/* #828 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555025
	/* java_name */
	.ascii	"mono/android/content/DialogInterface_OnCancelListenerImplementor"
	.zero	38

	/* #829 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555029
	/* java_name */
	.ascii	"mono/android/content/DialogInterface_OnClickListenerImplementor"
	.zero	39

	/* #830 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555032
	/* java_name */
	.ascii	"mono/android/content/DialogInterface_OnDismissListenerImplementor"
	.zero	37

	/* #831 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554860
	/* java_name */
	.ascii	"mono/android/media/MediaPlayer_OnBufferingUpdateListenerImplementor"
	.zero	35

	/* #832 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555091
	/* java_name */
	.ascii	"mono/android/runtime/InputStreamAdapter"
	.zero	63

	/* #833 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	0
	/* java_name */
	.ascii	"mono/android/runtime/JavaArray"
	.zero	72

	/* #834 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555112
	/* java_name */
	.ascii	"mono/android/runtime/JavaObject"
	.zero	71

	/* #835 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555130
	/* java_name */
	.ascii	"mono/android/runtime/OutputStreamAdapter"
	.zero	62

	/* #836 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554455
	/* java_name */
	.ascii	"mono/android/support/design/widget/AppBarLayout_OnOffsetChangedListenerImplementor"
	.zero	20

	/* #837 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554463
	/* java_name */
	.ascii	"mono/android/support/design/widget/BottomNavigationView_OnNavigationItemReselectedListenerImplementor"
	.zero	1

	/* #838 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554467
	/* java_name */
	.ascii	"mono/android/support/design/widget/BottomNavigationView_OnNavigationItemSelectedListenerImplementor"
	.zero	3

	/* #839 */
	/* module_index */
	.long	19
	/* type_token_id */
	.long	33554442
	/* java_name */
	.ascii	"mono/android/support/design/widget/TabLayout_BaseOnTabSelectedListenerImplementor"
	.zero	21

	/* #840 */
	/* module_index */
	.long	11
	/* type_token_id */
	.long	33554445
	/* java_name */
	.ascii	"mono/android/support/v4/app/FragmentManager_OnBackStackChangedListenerImplementor"
	.zero	21

	/* #841 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554456
	/* java_name */
	.ascii	"mono/android/support/v4/view/ActionProvider_SubUiVisibilityListenerImplementor"
	.zero	24

	/* #842 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554460
	/* java_name */
	.ascii	"mono/android/support/v4/view/ActionProvider_VisibilityListenerImplementor"
	.zero	29

	/* #843 */
	/* module_index */
	.long	14
	/* type_token_id */
	.long	33554441
	/* java_name */
	.ascii	"mono/android/support/v4/view/ViewPager_OnAdapterChangeListenerImplementor"
	.zero	29

	/* #844 */
	/* module_index */
	.long	14
	/* type_token_id */
	.long	33554447
	/* java_name */
	.ascii	"mono/android/support/v4/view/ViewPager_OnPageChangeListenerImplementor"
	.zero	32

	/* #845 */
	/* module_index */
	.long	15
	/* type_token_id */
	.long	33554442
	/* java_name */
	.ascii	"mono/android/support/v4/widget/DrawerLayout_DrawerListenerImplementor"
	.zero	33

	/* #846 */
	/* module_index */
	.long	0
	/* type_token_id */
	.long	33554447
	/* java_name */
	.ascii	"mono/android/support/v4/widget/NestedScrollView_OnScrollChangeListenerImplementor"
	.zero	21

	/* #847 */
	/* module_index */
	.long	12
	/* type_token_id */
	.long	33554440
	/* java_name */
	.ascii	"mono/android/support/v4/widget/SwipeRefreshLayout_OnRefreshListenerImplementor"
	.zero	24

	/* #848 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554448
	/* java_name */
	.ascii	"mono/android/support/v7/app/ActionBar_OnMenuVisibilityListenerImplementor"
	.zero	29

	/* #849 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554470
	/* java_name */
	.ascii	"mono/android/support/v7/widget/RecyclerView_OnChildAttachStateChangeListenerImplementor"
	.zero	15

	/* #850 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554478
	/* java_name */
	.ascii	"mono/android/support/v7/widget/RecyclerView_OnItemTouchListenerImplementor"
	.zero	28

	/* #851 */
	/* module_index */
	.long	4
	/* type_token_id */
	.long	33554486
	/* java_name */
	.ascii	"mono/android/support/v7/widget/RecyclerView_RecyclerListenerImplementor"
	.zero	31

	/* #852 */
	/* module_index */
	.long	22
	/* type_token_id */
	.long	33554476
	/* java_name */
	.ascii	"mono/android/support/v7/widget/Toolbar_OnMenuItemClickListenerImplementor"
	.zero	29

	/* #853 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554579
	/* java_name */
	.ascii	"mono/android/view/View_OnAttachStateChangeListenerImplementor"
	.zero	41

	/* #854 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554582
	/* java_name */
	.ascii	"mono/android/view/View_OnClickListenerImplementor"
	.zero	53

	/* #855 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554590
	/* java_name */
	.ascii	"mono/android/view/View_OnKeyListenerImplementor"
	.zero	55

	/* #856 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554594
	/* java_name */
	.ascii	"mono/android/view/View_OnLayoutChangeListenerImplementor"
	.zero	46

	/* #857 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554598
	/* java_name */
	.ascii	"mono/android/view/View_OnTouchListenerImplementor"
	.zero	53

	/* #858 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554490
	/* java_name */
	.ascii	"mono/android/widget/AdapterView_OnItemClickListenerImplementor"
	.zero	40

	/* #859 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555216
	/* java_name */
	.ascii	"mono/java/lang/Runnable"
	.zero	79

	/* #860 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33555222
	/* java_name */
	.ascii	"mono/java/lang/RunnableImplementor"
	.zero	68

	/* #861 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554439
	/* java_name */
	.ascii	"org/xmlpull/v1/XmlPullParser"
	.zero	74

	/* #862 */
	/* module_index */
	.long	17
	/* type_token_id */
	.long	33554440
	/* java_name */
	.ascii	"org/xmlpull/v1/XmlPullParserException"
	.zero	65

	.size	map_java, 94930
/* Java to managed map: END */

