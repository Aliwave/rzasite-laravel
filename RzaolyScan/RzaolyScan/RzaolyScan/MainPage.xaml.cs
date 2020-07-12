using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using Xamarin.Forms;
using RzaolyScan.Services;
using ZXing.Net.Mobile.Forms;
using System.Net;
using System.Net.Http;

namespace RzaolyScan
{
    // Learn more about making custom code visible in the Xamarin.Forms previewer
    // by visiting https://aka.ms/xamarinforms-previewer
    //[DesignTimeVisible(false)]
    public partial class MainPage : ContentPage
    {

        private static readonly HttpClient client = new HttpClient();

        public MainPage()
        {
            InitializeComponent();
        }

        private async void btnScan_Clicked(object sender, EventArgs e)
        {
            try
            {
                bool loop = true;
                while (loop == true)
                {
                    var scanner = DependencyService.Get<IQrScanningService>();
                    var result = await scanner.ScanAsync();
                    if (result != null)
                    {
                        Dictionary<string, string> req = new Dictionary<string, string>()
                    {
                        {"specifykey","//" }
                    };
                        FormUrlEncodedContent form = new FormUrlEncodedContent(req);
                        HttpResponseMessage response = await client.PostAsync(result, form);
                        string resultresponse = await response.Content.ReadAsStringAsync();
                        await DisplayAlert("Результат", resultresponse, "ok");
                    }
                    else
                    {
                        await DisplayAlert("Результат", "Неверный запрос", "ok");
                    }
                }
            }
            catch (Exception ex)
            {
                await DisplayAlert("Результат", ex.Message, "ok");
            }
        }
    }
}
